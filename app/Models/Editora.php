<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $table = 'editora';

    protected $fillable = [
        'nome',
        'endereco',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [];
}
