<?php

namespace App\Http\Controllers;

use App\Models\CoinRange;
use Illuminate\Http\Request;
use App\Models\Rate;
use Illuminate\Support\Str;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $rates = Rate::orderBy('created_at', 'asc')->get();
        return view('rate.view')->with('rates', $rates);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rates = Rate::orderBy('id', 'DESC')->get();
        return view('rate.create')->with('rates', $rates);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'coin_image'=> 'image|required|max:1999',
            'coin' => 'required',
            'buy' => 'required',
            'sell' => 'required',
            'min_amount' => 'required',
            'max_amount' => 'required'
        ]);

        $data = [
            // 'coin_image'=> $request->coin_image ?? null,
            'coin'=> $request->get('coin'),
            'buy' => $request->get('buy'),
            'sell' => $request->get('sell'),
            'min_amount' => $request->get('min_amount'),
            'max_amount' => $request->get('max_amount')
        ];

        if ($request->has('coin_image')) {
            $name = Str::random(4).time().$request->file('coin_image')->getClientOriginalName();
            $extension = $request->file('coin_image')->getClientOriginalExtension();
            $destination = './CoinImages';
            $path='/CoinImages/'.$name;
            $request->file('coin_image')->move($destination, $name);
            $data['coin_image'] = $path;
        }

        // $price = Rate::create([
        //     'coin_image' => $data['coin_image'],
        //     'coin' => $data['coin'],
        //     'buy' => $data['buy'],
        //     'sell' => $data['sell'],
        // ]);

        CoinRange::create([
                'coin_id' => $data['coin'],
                'buy' => $data['buy'],
                'sell' => $data['sell'],
                'min_amount' => $data['min_amount'],
                'max_amount' => $data['max_amount']
            ]);

        notify()->success("Rates Created!","Success");

        return redirect()->back();
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

    public function coin_details($coin_id)
    {
        $coin_details = CoinRange::where('coin_id',$coin_id)->get();
        $coin = Rate::find($coin_id);
        return view('rate.details')->with('coin_details', $coin_details)
                                    ->with('coin', $coin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $rates = CoinRange::find($id);
    //     return view('rate.edit')->with('rates', $rates);
    // }

    public function edit_rate($id)
    {
        $rates = CoinRange::find($id);
        $coin_name = Rate::where('id',$rates->coin_id)->first();
        return view('rate.edit')->with('rates', $rates)
                                ->with('coin_name', $coin_name);
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

        if ($request->has('coin_image')) {
            $name = Str::random(4).time().$request->file('coin_image')->getClientOriginalName();
            $extension = $request->file('coin_image')->getClientOriginalExtension();
            $destination = './CoinImages';
            $path='/CoinImages/'.$name;
            $request->file('coin_image')->move($destination, $name);
            $data['coin_image'] = $path;
        }


        $coin_range = CoinRange::find($id);

        $coin_range->update($data);

        notify()->success("Rate has been updated!","Success");

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function rate_kill($id)
    {
        CoinRange::find($id)->delete();
        return back();
    }

    public function destroy($id)
    {
        //
    }
}