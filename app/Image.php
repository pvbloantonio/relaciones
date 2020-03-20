<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //Es una tabla polimorfica
    public function imageable() {

        return $this->morphTo();
    }
}
