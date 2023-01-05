<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // cookie('place','promo',1,'/','http://127.0.0.1:8000/promo',true,true);

        // $sec = cookie()->all();

        // dd($as);
        // $promos = Promo::whereDate('endDate','>=',now())->get();
        // $promos = Promo::inRandomOrder()->limit(9)->whereDate('endDate','>=',now())->get();
        $promos = Promo::inRandomOrder()->limit(9)->whereDate('endDate','>=',now())->get();

        return response()
            ->view('cards.flip', ['promo' => $promos])
            ->cookie('state', 'running', 5);
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

        $valid = $request->validate([
            'promoDetails'=> 'required|string',
            'endDate'=> 'required|date'
        ]);

        $captured = Promo::create([
            'promoDetails' => $valid['promoDetails'],
            'endDate' => $valid['endDate']
        ]);

        return $captured;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promo  $Promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $Promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promo  $Promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $Promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promo  $Promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo $Promo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promo  $Promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $Promo)
    {
        //
    }
}
