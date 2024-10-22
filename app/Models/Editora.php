<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $table = 'editora';
    protected $hidden = [
        'created_at',
        'upated_at',
    ];
    protected $appends = [];

}
