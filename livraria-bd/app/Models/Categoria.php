<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'Categoria';
    protected $hidden = [
        'created_at',
        'upated_at',
    ];
    protected $appends = [];

}
