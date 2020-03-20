<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
    public function profile() {
        //Un usuario tiene un Perfil
        return $this->hasOne(Profile::class); 
    }

    
    public function level() {
        //Un usuario pertenece a un nivel
        return $this->belongsTo(Level::class);
    }

    
    public function groups() {
        // Un usuario tiene y pertenece a muchos grupos
        return $this->belongsToMany(Group::class)->withTimestamps();
    }

    public function location() {
        //Un usuario tiene una Localizacion a travez de perfil
        return $this->hasOneThrough(Location::class, Profile::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }
    //Un usuario puede tener una imagen de perfil
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}


