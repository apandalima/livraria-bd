<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';

    protected $fillable = [
        'titulo',
        'isbn',
        'sinopse',
        'preco',
        'autor_id',
        'editora_id',
    ];

    protected $hidden = [
        'autorRelationship',
        'editoraRelationship',
        'categoriaRelationship',
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'autor',
        'editora',
        'categoria'
    ];

    public function getAutorAttribute(){
        return $this->autorRelationship;
    }
    public function getEditoraAttribute(){
        return $this->editoraRelationship;
    }
    public function getCategoriaAttribute(){
        return $this->CategoriaRelationship;
    }

    public function setAutorAttribute($value)
    {
        if(isset($value)){
            $this->attributes['autor_id'] = Autor::where('id',$value)->first()->id;
        }
    }
    public function setEditoraAttribute($value)
    {
        if(isset($value)){
            $this->attributes['editora_id'] = Editora::where('id',$value)->first()->id;
        }
    }
    public function setCategoriaAttribute($value)
    {
        if(isset($value)){
            $this->categoriaRelationship()->sync($value);
        }
    }

    public function autorRelationship()
    {
        return $this->belongsTo(Autor::class,'autor_id');
    }

    public function editoraRelationship()
    {
        return $this->belongsTo(Editora::class,'editora_id');
    }

    public function categoriaRelationship()
    {
        return $this->belongsToMany(Categoria::class,'livros_has_categoria','livro_id','categoria_id');
    }
}
