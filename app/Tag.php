<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Polimorfismo muchos a muchos
    //Una etiqueta puede ser tranformada y puede tener muchos post
    //La entidad etiqueta va ser siempre una sola y va a trabajar con Post como con Videos

    public function posts() {

        return $this->morphedByMany(Post::class, 'taggable');
    }
    public function videos() {

        return $this->morphedByMany(Video::class, 'taggable');
    }
}
