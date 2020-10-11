<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    // protected $request;

    // public function __construct(Request $request){
    //     $this->request = $request;
    // }

    public function show(Request $request, $id=null)
    {    
        if($request->isMethod('post')){
            $messages = [];

            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ], $messages);

            if($validator->fails()){
                redirect()->route('contact')->withErrors($validator);
            }
            // $this->validate($request, $rules);
            
            // dump($request->all());
            

        }
        return view('default.contact', ['title' => 'Контакты', 'request' => $request]);
    }
}
