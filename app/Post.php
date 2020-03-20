<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Un post pertenece a un usuario
    public function user() {

        return $this->belongsTo(User::class);
    }
    //Un post pertenece a una categoria
    public function category() {

        return $this->belongsTo(Category::class);
    }

    //Métodos Polimórficos

    //Un post puede tener muchos comentarios
    public function comments() {

        return $this->morphMany(Comment::class, 'commentable');
    }
    //Un post tiene una imagen
    public function image() {

        return $this->morphOne(Image::class, 'imageable');
    }
    //Un post tiene muchas etiquetas y una etiqueta puede tener muchos post
    public function tags() {

        return $this->morphToMany(Tag::class, 'taggable'); 
    }

}
