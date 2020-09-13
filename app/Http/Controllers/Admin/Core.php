<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Article;
use \App\Country;
use \App\User;
use \App\Role;

use DB;

class Core extends Controller
{
    protected static $articles;


    //list materials
    public function getArticles(){

        $role = Role::find(1);

        // dump($user);
        $users = $role->users;
        dump($users[0]->name);

        return ;

        // $article = Article::create([
        //     'name' => 'Hello world',
        //     'text' => 'Some text',
        //     'img'  => 'Some img',
        // ]);

        // $article = Article::firstOrCreate([
        //     'name' => 'Hello',
        //     'text' => 'Hello',
        //     'img' => 'Hello',
        // ]);

        // $article = Article::firstOrNew([
        //     'name' => 'HelloName1S',
        //     'text' => 'HelloText',
        //     'img'  => 'HelloImg',
        // ]);        

        // $articles = Article::where('id', '>' , 3)->orderBy('name')->get();

        // Article::chunk(2, function(){

        // });
        
        // $articles = Article::findOrFail(1000);
        // $article = new Article();
        
        // $article->name = "new Model Object";
        // $article->text = "new Model Object";
        // $article->img  = "new Model Object";

        // $article->save();
        // $article = Article::findOrFail(1);
            
        // dump ($article);
        
        // $article->name = "updated model name field";
        // $article->save();

        // dump ($article);

        // return;


        // DB::table('articles')->orderBy('id')->chunk(4, function($articles){
        //     foreach($articles as $article){
        //         Core::addArticles($article);
        //     }
        // });

        // dump(self::$articles);

        // $articles = DB::table('articles')->pluck('name');
        // $articles = DB::table('articles')->count('*');
        // $articles = DB::table('articles')->max('id');

        // $query = DB::table('articles')->select(['id','name']);

        //
        //some code
        // //
        // $articles = DB::table('articles')->addSelect('text')
        //         ->where('id','=','5')
        //         ->where('name','LIKE','%%','XOR')
        //         ->where('text','LKE','%%')
        //     ->get();

        
        // $articles = DB::table('articles')->select('text')
        //         ->where(
        //             [
        //                 ['id','>','5'],
        //                 ['id','<','11'],
        //             ],
        //         )->get();

        // DB::table('articles')->insert(
        //     [
        //         [
        //             'name' => "asdasdasddddd",
        //             'text' => 'texttexttexttexttexttexttexttext',
        //             'img'  => 'aaaaa'
        //         ],
        //         [
        //             'name' => "dsassss",
        //             'text' => 'texttexasdasdsdsttexttexttexttexttexttext',
        //             'img'  => 'aaaaa'
        //         ]
        //     ]
        // );
        
        // $id = DB::table('articles')->insertGetId(
        //     [
        //         [
        //             'name' => "asdasdasddddd",
        //             'text' => 'texttexttexttexttexttexttexttext',
        //             'img'  => 'aaaaa'
        //         ],
        //         [
        //             'name' => "dsassss",
        //             'text' => 'texttexasdasdsdsttexttexttexttexttexttext',
        //             'img'  => 'aaaaa'
        //         ]
        //     ]
        // );

        // DB::table('articles')->where('id', 22)->update(['name' => 'Hell0 w0rlo1']);
        // $articles = DB::table('articles')->get();
        // dump($articles);
        // dd($id);
    }

    public static function addArticles($array){
        return self::$articles[] = $array;
    }

    //material
    public function getArticle($id){
        
    }
}
