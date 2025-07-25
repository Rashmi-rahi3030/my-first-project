<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
      protected $table = 'registers';

    protected $fillable =['username','email','password'];

    protected $hidden = ['password',];
}
