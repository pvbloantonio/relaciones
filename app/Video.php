<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
     //Un video pertenece a un usuario
     public function user() {

        return $this->belongsTo(User::class);
    }
    //Un video pertenece a una categoria
    public function category() {

        return $this->belongsTo(Category::class);
    }

    //Métodos Polimórficos

    //Un video puede tener muchos comentarios
    public function comments() {

        return $this->morphMany(Comment::class, 'commentable');
    }
    //Un video tiene una unica imagen
    public function image() {

        return $this->morphOne(Image::class, 'imageable');
    }
    //Un video tiene muchas etiquetas y una etiqueta puede tener muchos post
    public function tags() {

        return $this->morphToMany(Tag::class, 'taggable'); 
    }
}
