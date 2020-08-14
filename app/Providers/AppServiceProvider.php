<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Response;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //создается своя реализация ответа сервера (Response)
        //Response - реализует интерфейс Illuminate\Contracts\Routing\ResponseFactory
        
        Response::macro('myRes', function($value){
            return Response::make($value);
        });

        DB::listen(function($query){
            dump($query->sql);
        });


    }
}
