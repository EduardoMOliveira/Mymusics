<?php

namespace mymusics\Http\Controllers;

use Illuminate\Http\Request;
use mymusics\Singer;
class SingerController extends Controller
{
    
    public function index()
    {
        return view('singer.singer');
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
}
