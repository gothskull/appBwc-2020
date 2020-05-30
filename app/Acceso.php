<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    protected $fillable = ['lugar','userAcceso','passAcceso','mailAcceso'];
}
