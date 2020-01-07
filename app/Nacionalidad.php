<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    protected $table="Nacionalidades";
    protected $fillable = [
        'id', 'descripcion',
    ];
}
