<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'nationalid' , 'fullname', 'email', 'mobile','address'	,'image','role'
    ];
}
