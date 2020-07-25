<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Portfolio::all();
        return view('adminmart/home/viewportofolio', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminmart/home/addportofolio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambar = $request->file('file_upload');
        $name = 'Portofolio_'.time().'.'.$gambar->getClientOriginalExtension();
        $folder= public_path('img/Portofolio');
        $gambar->move($folder,$name);
       Portfolio::create([
        'judul' => $request->judul,
        'file_upload' => $name
        ]);
       return redirect('/portofolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio,$id)
    {
         $portfolio= Portfolio::where('id',$id)->first();
        return view ('adminmart/home/editportfolio', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio, $id)
    {
        $gambar = $request->file('file_upload');
        $name = 'Portfolio_'.time().'.'.$gambar->getClientOriginalExtension();
        $folder= public_path('img/Portofolio');
        $gambar->move($folder,$name);
        Portfolio::where('id',$id)->update([
        'judul' => $request->judul,
        'file_upload' =>$name
        ]);
       return redirect('/portofolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio,$id)
    {
        Portfolio::where('id',$id)->delete();
        return redirect ('/portofolio');
    }
     public function portofolio()
    {
        $data=Portfolio::all();
        return view('company/portfolio', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
