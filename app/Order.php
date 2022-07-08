<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $table='orders';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'address',
        'phone',
        'status',
        'payment',
        'total',
        'user_id',

    ];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function plates(){

        return $this->belongsToMany('App\Plate', 'plate_order', 'order_id' , 'plate_id' );

    }


}
