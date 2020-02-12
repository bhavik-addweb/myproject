<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login1 extends Model
{
   


    protected $table = 'login1';
    public $fillable = ['firstname','lastname','email','','password'];

}
