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

     // Siccome vogliamo usarla non nell'istanza ma nella classe utilizziamo la proprieta' statica
    // take a string as input and return a unique slug version
    public static function convertToSlug($name){

        $slugPrefix = Str::slug($name);

        $Slug = $slugPrefix;

        // andiamo ad interrogare il DB per vedere se esiste gia' questo slug

        // where 'slug' = $slug
        $postFound = Category::where('slug',$slugPrefix)->first();
        
        $counter = 1;

        while($postFound){
            $Slug = $slugPrefix . '_' . $counter;
            $counter++;
            $postFound = Category::where('slug',$Slug)->first();
        }

        return $Slug;
    }

}
