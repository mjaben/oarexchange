<?php

namespace App\Http\Controllers;

use App\Models\CoinRange;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Rate;
use App\Models\History;
use App\Models\Linked;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Uuid;

class PurchaseController extends Controller
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

    public function generateUniqueCode()
    {
        $randomNumber = random_int(100000, 999999);
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

            'btcaddress' => 'required',
            'value' => 'required',
            'rate' => 'required',
            'coin' => 'required', // Add coin to validation
            'method' => 'required',
            'total' => 'required',
            'sender_name' => 'required'
        ]);

        $rate = CoinRange::where([
            ['buy', $request->rate],
            ['coin_id', $request->coin_id]
        ])->with('rate')->first();

        // dd($rate);

        if (!$rate) {
            return back()->with('error', 'Selected coin and rate combination is not valid.');
        }

        $register = Linked::where('userid', auth()->user()->id)->first();

        if(is_null($register)){
            notify()->info("Please update your bank details!","");
            return back();
        }elseif($register){

        $randomNumber = random_int(100000, 999999);
        $purchases = new Purchase;
        $purchases->btcaddress = $request->btcaddress;
        $purchases->value = $request->value;
        $purchases->orderId = $randomNumber;
        $purchases->rate = $rate->rate->coin;
        $purchases->type = 'Buy';
        $purchases->status = 0;
        $purchases->sender_name = $request->sender_name;
        $purchases->method = $request->method;
        $purchases->total = $request->total;
        $purchases->user_id = auth()->user()->id;

        $purchases->save();

            return redirect()->route('purchases.show', encrypt($purchases->id));
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
        $authEmail = auth()->user()->email;
        $users = User::whereRoleIs('admin')->first();
        $adminBank = Linked::where('userid', $users->id)->first();
        $purchase = Purchase::findorfail(decrypt($id));
        return view('purchase.show')->with('purchase', $purchase)
                                    ->with('adminBank', $adminBank)
                                    ->with('authEmail', $authEmail);
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
    public function cancelPurchaseOrder($id)
    {
        $cancel_order = Purchase::find($id)->delete();
        notify()->success("Order Cancelled!","Success");
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        //
    }
}