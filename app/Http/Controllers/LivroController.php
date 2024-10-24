<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Livro;
    use App\Models\Categoria;
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
            $this->editoras = Editora::all()->pluck('nome_editora','id');
            $this->categorias = Categoria::all()->pluck('tipo','id');
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
            $categoria = $this->categorias;
            $autor = $this->autores;
            $editora = $this->editoras;
            //esta no plural só para melhor entendimento, pois o laravel entende
        /**
         * selecionar o que estão no banco para poder usar e preencher as informarções
         */
            return view('livros.form', compact('categoria','autor','editora'));

            // mudou index para form
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request) //store insere algo no banco
        {
        //dd($request);
            //essa sintaxe é feito caso a chave estrangeira esteja na tabela principal
            $livro = $this->livros->create([
                'titulo' => $request->titulo,
                                    /* essa criação de create dentro de create quando for 1 para 1
                                    'autor_id' => $this->autores->create([
                                        'nome' => $request->nome,
                                        'tipo' => $request->tipo,
                                        ])->id,
                                        'editora_id' => $this->editoras->create([
                                        'nome' => $request->nome,
                                        'tipo' => $request->tipo,
                                    ])->id,*/
                    'autor_id' =>$request->autor,
                    'editora_id' =>$request->editora,
            ]);
            $categorias_id = $request->categoria;
            if (isset($categorias_id)){
                    foreach ($categorias_id as $categoria_id)
                    {  $livro->categoriaRelationship()->attach($categoria_id);
                    }
            }
            return redirect()->route('livros.index');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id) // no show passamos argumentos, no caso o id
        {
            $form = 'disabled';

            $livro = $this->livros->find($id);
        //mesma info do create
            $categoria = $this->categorias;
            $autor = $this->autores;
            $editora = $this->editoras;

            return view('livros.form', compact('categoria','autor','editora','form','livro'));
            //info do create

        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        { //mesma info do show, tirando o form
            $livro = $this->livros->find($id);
            $categoria = $this->categorias;
            $autor = $this->autores;
            $editora = $this->editoras;

            return view('livros.form', compact('categoria','autor','editora','livro'));
            //info do show
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id) // att algo no banco
        {
            $livro = $this->livros->find($id); //esse id é do bd
            //find pega id do bd e get pega o id da coleção
            $livro->update([
                    'titulo' => $request->titulo,
                    'autor_id' =>$request->autor,
                    'editora_id' =>$request->editora,
            ]);
            $categorias_id = $request->categoria;

            $livro->categoriaRelationship()->sync(null);

            if (isset($categorias_id)){
                    foreach ($categorias_id as $categoria_id)
                    {  $livro->categoriaRelationship()->attach($categoria_id);
                    }
            }
            return redirect()->route('livros.show', $livro->id);
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $livros = $this->livros->find($id)->delete();
            return redirect()->route('livros.index');
        }
    }

