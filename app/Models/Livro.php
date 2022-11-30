<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';

    protected $hidden = [];

    protected $appends = [];

    public function getAutorAttribute(){
        return $this->autorRelationship;
    }
    public function getEditoraAttribute(){
        return $this->editoraRelationship;
    }
    public function getGeneroAttribute(){
        return $this->generoRelationship;
    }
     /**
         * get the autor por que pertece ao livro
         * @return Autor
         */
        public function autorRelationship()
        {
        return $this->belongsTo(Autor::class,'autor_id');
        }
        /**
             * get the autor por que pertece ao livro
             * @return Editora
             */
        public function editoraRelationship()
        {
        return $this->belongsTo(Editora::class,'editora_id');
        }
        public function generoRelationship()
        {
        return $this->belongsToMany(Genero::class,'livros_has_genero','livro_id','genero_id');
        }



}
