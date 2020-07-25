<?php

namespace App\Http\Controllers;

use App\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pricing=Pricing::all();
      return view('company/pricing',compact('pricing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('adminmart/pricing/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Pricing::create([
          'judul' => $request->judul,
          'harga' => $request ->harga,
          'deskripsi' => $request ->deskripsi
          ]);
         return redirect('/pricing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing,$id)
    {
      $pricing= Pricing::where('id',$id)->first();
      return view ('adminmart/pricing/edit', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing, $id)
    {
      Pricing::where('id',$id)->update([
        'judul' => $request->judul,
        'harga' =>$request ->harga,
        'deskripsi' =>$request ->deskripsi,
        ]);
       return redirect('/pricings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    
    public function pricings()
    {
      $pricing=Pricing::all();
      return view('adminmart/pricing/view',compact('pricing'));
    }
    public function destroy(Pricing $pricing,$id)
    {
      Pricing::where('id',$id)->delete();
      return redirect ('/pricings');
    }
}
