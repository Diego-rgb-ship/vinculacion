<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    protected $table = "accesos";
    
    protected $fillable = [
        'password',
    ];
}
