<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $hidden = [
        'created_at',
        'upated_at',
    ];
    protected $appends = [];

}
