<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Rate;
use App\Models\Address;
use App\Models\Network;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coin_arr = Rate::orderBy('id', 'desc')->get();
        // $coin_arr = array();
        // $address = DB::table('addresses')->select("id","address","barcode","coin","network")->get();
        // foreach($address as $addy){
        //     $rates = Rate::where('id',$addy->coin)->get();
        //     if(!empty($rates[0])){
        //         $rates_arr["id"]      =  $addy->id;
        //         $rates_arr["address"] =  $addy->address;
        //         $rates_arr["barcode"] =  $addy->barcode;
        //         $rates_arr["coin_image"] =  $rates[0]->coin_image;
        //         $rates_arr["network"] =  $addy->network;
        //         $rates_arr["coin"]    =  $rates[0]->coin;
        //         array_push($coin_arr,$rates_arr);
        //     }
        // }

        return view('address.index')->with('coin_arr', $coin_arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rates = Rate::all();
        return view('address.create')->with('rates', $rates);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
         $this->validate($request,[
            'barcode'=> 'image|required|max:1999',
            'address' => 'required',
            'coin'=> 'required',
            // 'network'=> 'required',
        ]);


        $data = [
            'barcode'  => $request->get('barcode'),
            'address'  => $request->get('address'),
            'coin'     => $request->get('coin'),
            'network'  => $request->get('network'),
            'user_id'  => auth()->user()->id,
        ];

        if ($request->has('barcode')) {
            $name = Str::random(4).time().$request->file('barcode')->getClientOriginalName();
            $extension = $request->file('barcode')->getClientOriginalExtension();
            $destination = './Barcodes';
            $path='/Barcodes/'.$name;
            $request->file('barcode')->move($destination, $name);
            $data['barcode'] = $path;
        }

        Address::create($data);

        notify()->success("Coin Address Added!","Success");

        return redirect()->back();
    }

    public function fetchNetworkAddress($coin, $type)
    {
        $network_address = Address::where('network', $type)->where('coin', $coin)->first();
        return response()->json([
            'wallet' => $network_address->address ?? '',
            'qr_code' => $network_address->barcode ?? '',
            'network' => $network_address->network ?? '',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coin_edt = array();
        $address = Address::findorfail($id);
        $rates = Rate::all();
        $coin_name = Rate::where('id',$address->coin)->first();
        $c_name = $coin_name['coin'];
        $c_id = $coin_name['id'];
        return view('address.edit')->with('address', $address)
                                   ->with('rates', $rates)
                                   ->with('c_name', $c_name)
                                   ->with('c_id', $c_id);
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
        $data = $request->except(['_method','_token']);

        if ($request->has('barcode')) {
            $name = Str::random(4).time().$request->file('barcode')->getClientOriginalName();
            $extension = $request->file('barcode')->getClientOriginalExtension();
            $destination = './Barcodes';
            $path='/Barcodes/'.$name;
            $request->file('barcode')->move($destination, $name);
            $data['barcode'] = $path;
        }

        $address = Address::find($id);

        $address->update($data);

        notify()->success("Address credentials Updated","Success");

        return back();
    }

    public function address_details($coin_id)
    {
        $coin_arr = Address::where('coin',$coin_id)->get();
        return view('address.details')->with('coin_arr', $coin_arr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function address_kill($id)
    {
        Address::find($id)->delete();
        return back();
    }

    public function destroy($id)
    {
        //
    }
}