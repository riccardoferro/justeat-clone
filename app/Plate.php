<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{

    protected $table = 'plates';

    protected $fillable = ['name', 'price', 'description', 'visible','image'];




    public function user(){

        return $this->belongsTo('App\User');

    }


    public function orders(){

        return $this->belongsToMany('App\Order');

    }

}
