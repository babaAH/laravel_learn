<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // protected $request;

    // public function __construct(Request $request){
    //     $this->request = $request;
    // }

    public function show(Request $request, $id=null)
    {    
        if($request->isMethod('post')){
            $rules = [
                'email' => 'required|email',
                'password' => 'required|confirmed|min:6|max:128',
                'city' => 'required|string'
            ];

            $this->validate($request, $rules);
            dump($request->all());
            

        }
        return view('default.contact', ['title' => 'Контакты', 'request' => $request]);
    }
}
