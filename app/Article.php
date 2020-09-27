<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $table = 'articles'; можно не указывать, если имя класса в единственном числе совпадает с именем таблицы
    protected $primaryKey = 'id';
    public $incrementing = TRUE;

    public $timestamps = TRUE;

    protected $fillable = [
    	'name', 'img', 'text'
    ];

    protected $guarded = ['*'];

    protected $casts = [
        'updated_at' => 'boolean',
        'created_at' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(
            '\App\User'
        );
    }

    // public function getNameAttribute($value)
    // {
    //     return 'hello world - ' . $value . ' - Hello world';
    // }

    public function setNameAttribute($value)
    {
        $value  = $value . "|" . $value;
        $this->attributes["name"] = strtolower($value);
    }
}
