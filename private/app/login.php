<?php

namespace App;

use Illuminate\Database\Eloquent\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatablet;

use Illuminate\Auth\Authenticatable;


class login extends Authenticatable 
{
    
    use Notifiable;
    
    protected $guard = 'login';

    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];

}
