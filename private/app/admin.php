<?php

namespace App;

use Illuminate\Database\Eloquent\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatablet;

use Illuminate\Auth\Authenticatable;


class admin extends Authenticatable 
{
    
    use Notifiable;
    
    protected $guard = 'admin';

    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];

}
