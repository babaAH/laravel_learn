<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function show($id){
        // dd( __METHOD__);
        dd($id);
    }
}
