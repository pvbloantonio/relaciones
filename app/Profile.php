<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Un perfil tiene una localización
    public function location() {

        return $this->hasOne(Location::class);
    }
}
