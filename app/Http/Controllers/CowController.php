<?php

namespace App\Http\Controllers;

use App\Cow;
use Illuminate\Http\Request;

class CowController extends Controller
{
    public function all(){
        //get all the cows
        $cows = Cow::all();
        //print out variable data and stop execution
        return view('cows.all',['cows' => $cows]);
    }

    public function add(){
        return view('cows.add');
    }

    public function save(Request $request){
        dd('here');
    }
}
