<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', 'Admin\IndexController@show')
    // ->middleware('auth')
    ->name('home');

Route::get('/download', 'AboutController@download')
    ->name('download');

Route::get('/forms', function () {
    return view('forms');
})->name('forms');

Route::get('/article/{id}', function ($id) {
    // return view('welcome');
    echo $id;
})->name('article');

Route::get('/page/{id}/{cat}', function ($id, $cat=null) {
    echo $id . " " . $cat;
    // return view('page');
})->where(
    ['id'  =>'[0-9]+'],
    ['cat' =>'[A-Za-z]+']
);



Route::middleware(['mymiddle'])->group(function(){

});

// Route::group(['prefix' => 'admin'], function () {



// })->middleware('web');

Route::get('/about/', 'AboutController@show')
    ->name('about');

Route::get('/contact/', 'ContactController@show')
    ->name('contact');

Route::post('/contact/', 'ContactController@store');
    // ->name('contact');
// Route::match(['get', 'post'],'/contact/', 'ContactController@show')
    // ->name('contact');

Route::get('/about/{id}', 'FirstController@show');

Route::get('/articles', 'Admin\Core@getArticles')
    ->name('articles');



Route::get('/articles/{page}', 'Admin\Core@getArticle')
    ->middleware(['mymiddle'])
    ->name('article');

// Route::controller('/pages', 'PagesController');

Route::resource('pages','Admin\CoreResource');

