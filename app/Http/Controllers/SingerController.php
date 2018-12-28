<?php

namespace mymusics\Http\Controllers;

use Illuminate\Http\Request;
use mymusics\Singer;
use mymusics\StyleMusic;
class SingerController extends Controller
{
    
    public function index()
    {   
        
        $data['style_music'] = StyleMusic::pluck('type' ,'id');

        return view('singer.singer', compact('data'));
    }
    
    public function store(Request $request)
    {

        $singer = Singer::create($request->all());

        if ($singer) {
            $msg = [
                'message' => "Cantor(a) {$singer->name}, cadastrado com sucesso!",
            ];

        } else {
            
            $msg = [
                'error' => 'Some error!',
            ];
        }

        return redirect()->back()->with('success', "Cantor(a) {$singer->name}, cadastrado com sucesso!"); 

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

    public function photos(Request $request) {

        // header('Content-Type: image/png');

        echo base64_decode($request->photo);

        //dd();
    }
}
