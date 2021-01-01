<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function insertClass(Request $req){
        $req->validate([
            'standard'=> 'required |max:10| min:1'
        ]);
        \App\Models\Standard::create([
            'standard'=>$req->standard
        ]);
        return redirect()->back();
    }
    public function insertDetails(Request $req){
        $req->validate([
            'name'=> 'required',
            'dob'=> 'required',
            'roll'=> 'required',
            'reg_no'=> 'required',
            'about'=> 'required',
        ]);
        \App\Models\Post::create([
            'name'=>$req->name,
            'dob'=>$req->dob,
            'roll'=>$req->roll,
            'reg_no'=>$req->reg_no,
            'about'=>$req->about,
        ]);
        return redirect()->back();
    }

}
