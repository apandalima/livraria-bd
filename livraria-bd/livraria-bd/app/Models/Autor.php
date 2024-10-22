<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autor';
    protected $hidden = [
        'created_at',
        'upated_at',
    ];
    protected $appends = [];

}