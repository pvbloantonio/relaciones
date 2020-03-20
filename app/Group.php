<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //Un grupo tiene y pertenece a muchos usuarios

    public function users() {

        return $this->belongToMany(Groups::class)->withTimestamps();
    }
}
