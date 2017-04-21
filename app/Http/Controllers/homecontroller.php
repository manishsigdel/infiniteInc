<?php

namespace App\Http\Controllers;

use App\infinitemodel;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function Index(){
        return view('index');
    }

    public function Create(Request $request){
        $obj = new infinitemodel();
        $obj->name = $request->get('name');
        $obj->contact = $request->get('contact');
        $obj->help = $request->get('help');
        $obj->location = $request->get('location');
        $obj->save();
        return redirect('home')->with('Success','Added Sucessfull');
    }

    public function Dashboard(){
        return view('dashboard');
    }
}
