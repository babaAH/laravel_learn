<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $table = 'articles'; можно не указывать, если имя класса в единственном числе совпадает с именем таблицы
    protected $primaryKey = 'id';
    public $incrementing = FALSE;

    public $timestamps = FALSE;

    protected $fillable = [
    	'name', 'img', 'text'
    ];

    public function user()
    {
        return $this->belongsTo(
            '\App\User'
        );
    }
}
