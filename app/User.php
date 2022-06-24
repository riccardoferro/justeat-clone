<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'company', 'address', 'partita_iva', 'image', 'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function plates()
    {

        return $this->hasMany('App\Plate');
    }

    public function categories()
    {

        return $this->belongsToMany('App\Category', 'category_user', 'user_id', 'category_id');
    }


    public function orders()
    {

        return $this->hasMany('App\Order');
    }

    // funzione per la creazione della slug

    public static function generateToSlug($company)
    {
        $slugPrefix = Str::slug($company);
        $slug = $slugPrefix;
        $userFound = User::where('slug', $slug)->first();
        $counter = 1;

        while ($userFound) {
            $slug = $slugPrefix . '_' . $counter;
            $counter++;
            $userFound = User::where('slug', $slug)->first();
        }

        return $slug;
    }
}
