<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Genero;
use App\Models\Autor;
use App\Models\Editora;

class LivroController extends Controller
{
    /**
    * Instantiate a new controller instace
    *@param \App\Models\Livro $livros
    * @return void
    */
    public function __construct(Livro $livros){
        $this->livros = $livros;
        //$this->autor = new Autor;
        //$this->editora = new Editora;
        //$this->autor = new Editora;
        $this->autores = Autor::all()->pluck('nome','id');
        $this->editoras = Editora::all()->pluck('nome','id');
        $this->generos = Genero::all()->pluck('tipo','id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = $this->livros->all();
        return view('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genero = $this->generos;
        $autor = $this->autores;
        $editora = $this->editoras;
        //esta no plural só para melhor entendimento, pois o laravel entende
     /**
     * selecionar o que estão no banco para poder usar e preencher as informarções
     */
        return view('livros.form', compact('genero','autor','editora'));

          // mudou index para form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

