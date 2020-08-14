<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use DB;

class AboutController extends Controller
{
    public function show(){

        $articles = DB::select("SELECT * FROM `articles`");
        dump($articles);

        DB::insert("INSERT INTO `articles` (`name`, `text`, `img`) VALUES(?,?,?)", ['test1', 'TEXT', 'some IMG']);
        $result = DB::connection()->getPdo()->lastInsertId();
        // dump($result);
        
        // $result = DB::update("UPDATE articles SET name = 'updated Name' WHERE `id` = 1");
        
        return view('default.about')->withTitle("About Page");
        // return 'hello';
        //$view = view('default.about')->withTitle('Hello World')->render();
        // return (new Response($view))
        //     ->header('Content-Type', 'newType')
        //     ->header('Header-One', 'newHeader');

        // return response($view)
        //     ->header('Content-Type', 'newType')
        //     ->header('Header-One', 'newHeader');

        // return response()->json(['asdasd' => 'asdasddddd']);
        
        // return response($view)->withHeaders([
        //     'headerOne' => 'hello',
        //     'headerOne' => 'hello'
        // ]);

        //return redirect('/');

        // return view('default.about')->withTitle('Hello World');
    }

    public function show1(){

        // return 'hello';
        $view = view('default.about')->withTitle('Hello World')->render();
        // return (new Response($view))
        //     ->header('Content-Type', 'newType')
        //     ->header('Header-One', 'newHeader');

        // return response($view)
        //     ->header('Content-Type', 'newType')
        //     ->header('Header-One', 'newHeader');

        // return response()->json(['asdasd' => 'asdasddddd']);
        
        // return response($view)->withHeaders([
        //     'headerOne' => 'hello',
        //     'headerOne' => 'hello'
        // ]);

        // return redirect('/')->withInput();
        // return redirect('/')->with('param1', 'Hellooo0o0oo00');
        // return redirect()->action('ContactController@show');

        // return view('default.about')->withTitle('Hello World');
        
        //вызов пользовательского ответа
        return response()->myRes('ji');
    }

    public function download(){
        $headers = ['Content-type' => 'text/plain', 'Content-Disposition' => sprintf('attachment; filename="test.txt"')];


        return response()->download('robots.txt', 'rb.txt', $headers);

    }
}
