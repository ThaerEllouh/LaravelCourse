<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Admin extends Authenticatable
{
    protected $table = "admins";
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password'];
    // public $timestamps = false;

    protected $guard = "admin";

}


