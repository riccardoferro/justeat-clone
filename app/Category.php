<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    //

    protected $table = 'categories';

    public function users(){

        return $this->belongsToMany('App\User', 'category_user', 'category_id', 'user_id' );

    }

    protected $fillable = ['name', 'image', 'slug'];

}
