<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(){


        $data = [
            'title' => 'Laravel project',
            'data' => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5',
            ],
            'dataI' => ['List 1','List 2','List 3','List 4','List 5'],

            'bvar' => true,
            'script' => "<script>alert('hello')</script>",
        ];
        // return view('default.template')->with(['title' => 'HelloG',/*'title2' => 'HelloG2','title3' => 'HelloG3'*/]);
        return view('default.index', $data);//->withtitle('Helllasdasd');
    }
}
