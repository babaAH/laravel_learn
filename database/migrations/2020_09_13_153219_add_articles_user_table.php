<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArticlesUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('articles')){
            
            Schema::table('articles', function (Blueprint $table) {
                
                if(!Schema::hasColumn('articles','user_id')){ 
                    $table->bigInteger('user_id')->unsigned()->default(1);
                    $table->foreign('user_id')->references('id')->on('users');

                }

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
