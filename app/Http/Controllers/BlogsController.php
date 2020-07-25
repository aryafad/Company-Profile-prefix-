<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Blogs::all();
        return view('adminmart/blog/view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('adminmart/blog/add');
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
        $name = 'Blogs_'.time().'.'.$gambar->getClientOriginalExtension();
        $folder= public_path('img/Blogs');
        $gambar->move($folder,$name);
        Blogs::create([
            'judul' => $request->judul,
            'deskripsi' => $request ->deskripsi,
            'file_upload' => $name
            ]);
           return redirect('/blogs');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blogs)
    {
        // Tampilan halaman welcome
        $data=Blogs::all();
        return view('company/blog',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blogs,$id)
    {
        $blogs= blogs::where('id',$id)->first();
        return view ('adminmart/blog/edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blogs,$id)
    {
        BLogs::where('id',$id)->update([
        'judul' => $request->judul,
        'deskripsi' =>$request ->deskripsi,
        'file_upload' => $name
        ]);
       return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blogs,$id)
    {
       Blogs::where('id',$id)->delete();
        return redirect ('/blogs');
    }
     public function detail(Blogs $blogs,$id)
    {
        $detail = Blogs::find($id);
        return view('company/detailblog',compact('detail'));
    }
}
