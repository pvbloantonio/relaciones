<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Comentarios es una tabla polimorfica
    public function commentable() {

        return $this->morphTo();
    }
    //Un comentario pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
