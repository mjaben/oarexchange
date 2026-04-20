<?php

namespace App\Http\Controllers;

use Mail;
use Uuid;
use App\Models\Rate;
use App\Models\Sale;
use App\Mail\saleMail;
use App\Models\Linked;
use App\Models\Address;
use App\Models\History;
use App\Models\Network;
use App\Models\CoinRange;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request,[
            'value_sell' => 'required',
            'rate_sell' => 'required',
            'coin' => 'required', // Add coin to validation
            'total' => 'required',
            'sender_name' => 'required'
        ]);

        $rate = CoinRange::where([['sell', $request->rate_sell], ['coin_id', $request->coin_id]])->with('rate')->first();

        if (!$rate) {
            return back()->with('error', 'Selected coin and rate combination is not valid.');
        }

        $register = Linked::where('userid', auth()->user()->id)->first();

        if(is_null($register)){
            notify()->info("Please update your bank details!","");
            return back();
        }elseif($register){

        $randomNumber = random_int(100000, 999999);
        // dd($rate);
        $sale = new Sale;
        $sale->value = $request->value_sell;
        $sale->sender_name = $request->sender_name;
        $sale->orderId = $randomNumber;
        $sale->rate = $rate->rate->coin;
        $sale->rate_id = $rate->rate->id;
        $sale->type = 'Sell';
        $sale->status = 0;
        $sale->total = $request->total;
        $sale->user_id = auth()->user()->id;

        $sale->save();

            return redirect()->route('sales.show', encrypt($sale->id));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::find(decrypt($id));
        $networks = Network::where('address_id', $sale['rate_id'])->get();
        // dd($networks);
        if($networks->empty()){
            $coin_info = Address::where('coin', $sale['rate_id'])->first();
            if(is_null($coin_info)){
                notify()->error("Contact admin for transaction info!");
                return back();
            }
            $usAct = Linked::where('userid', $sale['user_id'])->first();
            return view('sale.show')->with('sale', $sale)->with('coin_info',$coin_info)->with('networks',$networks)->with('usAct',$usAct);
        }else{
            $usAct = Linked::where('userid', $sale['user_id'])->first();
            return view('sale.show')->with('sale', $sale)->with('networks',$networks)->with('usAct',$usAct);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function cancelSaleOrder($id)
    {
        $cancel_order = Sale::find(decrypt($id));
        $cancel_order->delete();
        notify()->success("Order Cancelled!","Success");
        return redirect()->route('dashboard');
    }


    public function destroy($id)
    {
        //
    }
}