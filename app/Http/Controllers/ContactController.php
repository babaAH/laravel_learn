<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    // protected $request;

    // public function __construct(Request $request){
    //     $this->request = $request;
    // }

    public function show(Request $request, $id=null)
    {
        // if($request->isMethod('post')){
        //     $messages = [];

        //     $validator = Validator::make($request->all(), [
        //     ], $messages);

        //     if($validator->fails()){
        //         return redirect()->route('contact')->withErrors($validator)->withInput();
        //     }
        //     // $this->validate($request, $rules);

        //     // dump($request->all());


        // }
        return view('default.contact', ['title' => 'Контакты', 'request' => $request]);
    }

    public function store(ContactRequest $request)
    {
        //todo
    }
}
