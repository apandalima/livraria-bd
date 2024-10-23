<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autor';

    protected $fillable = [
        'nome',
        'biografia',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [];
}
