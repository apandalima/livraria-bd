<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';

    protected $hidden = [];

    protected $appends = [];

     /**
         * get the autor por que pertece ao livro
         * @return autor
         */
        public function autorRelationship()
        {
        return $this->belongsTo(autor::class,'autor_id');
        }
        /**
             * get the autor por que pertece ao livro
             * @return editora
             */
        public function editoraRelationship()
        {
        return $this->belongsTo(editora::class,'editora_id');
        }
        public function generoRelationship()
        {
        return $this->belongsToMany(genero::class,'livros_has_genero','livro_id','genero_id');
        }

}
