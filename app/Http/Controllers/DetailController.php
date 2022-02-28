<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle ="Ini Judul Hero Post dari controller";
        $desc = "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.";
        $url = url('/news/hero-post-detail');
        return view('welcome', compact('tittle' , 'desc' , 'url'));
    }
    public function featured($id){
        $tittle = $id == 1 ? 'Ini judul featured post 1' : 'Ini judul featured post 2';
        $desc = $id == 1 ? 'ini content featured post 1 dari controller' : 'ini content featured post 2 dari controller';
        $url = url('/news/featured/' . $id);
        return view('welcome', compact('tittle' , 'desc' , 'url'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tittle ="Ini Judul Hero Post dari controller";
        $desc = "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.";
        $url = url('/news/hero-post-detail');
        return view('welcome', compact('tittle', 'desc', 'url'));
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
    public function destroy($id)
    {
        //
    }
}
