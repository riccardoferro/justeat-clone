<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $table='orders';

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function plates(){

        return $this->belongsToMany('App\Plate', 'plate_order', 'order_id' , 'plate_id' );

    }


}
