<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Multiuser extends Authenticatable
{
    use Notifiable;

    protected $guard = 'multiuser';

    protected $fillable = ['email',  'password','first_name','last_name','company'];

    protected $hidden = ['password',  'remember_token'];
}
