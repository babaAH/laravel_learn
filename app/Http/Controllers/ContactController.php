<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // protected $request;

    // public function __construct(Request $request){
    //     $this->request = $request;
    // }

    public function show(Request $request, $id=null){
        
        return view('default.contact', ['title' => 'Контакты', 'request' => $request]);
    }
}
