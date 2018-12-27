<?php

namespace mymusics\Http\Controllers;

use Illuminate\Http\Request;

class StyleMusicController extends Controller
{
   
    public function index()
    {
        return view('style_music.style');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
