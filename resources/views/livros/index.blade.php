    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
        <title> LIVRARIA </title> <!-- titulo da pag -->
        <link rel="stylesheet" href= "{{asset('/css/app.css')}}">
    </head>

    <body>
        <h1> Listagem dos Livros </h1>
        <a href="{{route('livros.create')}}">Novo Livro</a>
        <br> <br/>
        <table class="table">
            <thead>
                <!--  cabeçalho da tabela -->
                <tr>
                    
                    <th scope="col">Titulo</th> <!--  cabeçalho da celula -->
                    <th scope="col">Autor</th>
                    <th scope="col">Editora</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Ações</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($livros as $livro)
                    <tr>
                        <td>
                            {{ $livro->titulo}};
                        </td>
                        <td>
                            {{ $livro->autor->nome}};
                        </td>
                        <td>
                            {{ $livro->editora->nome}};
                        </td>
                        {{-- {{dd($livro->genero)}} depuração --}}
                        <td>
                            @foreach ($livro->genero as $genero)
                            {{$genero->tipo}};
                            @endforeach
                        </td>
                        <td>
                            <a href="{{route('livros.show', $livro->id)}}">Visualizar</a>
                            <a href="{{route('livros.edit', $livro->id)}}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </body>

    </html>
