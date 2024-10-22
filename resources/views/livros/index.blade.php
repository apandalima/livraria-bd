    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
        {{-- serve para se adp com mobile --}}
        <title> LIVRARIA </title> <!-- titulo da pag -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>

    <body class="bode">
        <h1> Listagem dos Livros </h1>
        <a type="button" class="btn btn-outline-primary" href="{{ route('livros.create') }}">Novo Livro</a>
        <br> <br />
        <table class="table">
            <thead>
                <!--  cabeçalho da tabela -->
                <tr>

                    <th scope="col">Titulo</th> <!--  cabeçalho da celula -->
                    <th scope="col">Autor</th>
                    <th scope="col">Editora</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ações</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($livros as $livro)
                    <tr>
                        <td>
                            {{ $livro->titulo }};
                        </td>
                        <td>
                            {{ $livro->autor->nome }};
                        </td>
                        <td>
                            {{ $livro->editora->nome }};
                        </td>
                        {{-- {{dd($livro->categoria)}} depuração --}}
                        <td>
                            @foreach ($livro->categoria as $categoria)
                                {{ $categoria->tipo }};
                            @endforeach
                        </td>
                        <td>
                            <a type="button" class="btn btn-primary" href="{{ route('livros.show', $livro->id) }}">Visualizar</a>
                            <a type="button" class="btn btn-warning" href="{{ route('livros.edit', $livro->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
                integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            </script>
    </body>

    </html>
