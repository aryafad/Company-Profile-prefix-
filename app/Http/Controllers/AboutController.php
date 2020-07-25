<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=About::all();
        return view('adminmart/home/viewabout', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminmart/home/addabout');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('file_upload');
        $name = 'About_'.time().'.'.$foto->getClientOriginalExtension();
        $folder= public_path('img/about');
        $foto->move($folder,$name);
       About::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'file_upload' => $name
        ]);
       return redirect('/about');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about,$id)
    {
       $about= About::where('id',$id)->first();
        return view ('adminmart/home/editabout', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about,$id)
    {
        $foto = $request->file('file_upload');
        $name = 'About_'.time().'.'.$foto->getClientOriginalExtension();
        $folder= public_path('img/about');
        $foto->move($folder,$name);
         About::where('id',$id)->update([
        'judul' => $request->judul,
        'deskripsi' =>$request ->deskripsi,
        'file_upload' =>$name
        ]);
       return redirect('/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about,$id)
    {
        About::where('id',$id)->delete();
        return redirect ('/about');
    }
}
