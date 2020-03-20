<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Una categoria tiene muchos post y videos
    public function posts() {
        
        return $this->hasMany(Post::class);
    }

    public function videos() {

        return $this->hasMany(Video::class);
    }
}
