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

    public static function generateToSlug($name)
    {
        $slugPrefix = Str::slug($name);
        $slug = $slugPrefix;
        $categoryFound = Category::where('slug', $slug)->first();
        $counter = 1;

        while ($categoryFound) {
            $slug = $slugPrefix . '_' . $counter;
            $counter++;
            $categoryFound = Category::where('slug', $slug)->first();
        }

        return $slug;
    }

}
