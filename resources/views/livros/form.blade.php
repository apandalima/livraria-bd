    <!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            @if (isset($livro))
                <title> Visualização dos Livros</title>
                @else
                <title> Criação dos Livros</title>
                @endif

        </head>
        <body>
            @csrf
            {{-- operador ternario --}}
            {{-- <label for="titulo" class="form-check-label">Titulo</label>
            <input placeholder="Digite o titulo" name="titulo" type="text" --}}
            {{-- id="titulo" value="{{ isset($livro) ? $livro->titulo : null}}"> --}}

        @if (isset($livro))
        {{-- rota para fazer att dos dados já existentes--}}
                {!! Form::open(['route' => ['livros.update', $livro->id], 'method' => 'PUT', 'name' => 'form'])!!}
                @else
                {{-- rota para criar os dados  --}}
                {!! Form::open(['route' => 'livros.store', 'method' => 'POST', 'name' => 'form'])!!}
                {{-- Se usa o put  no update e no store se usa o post --}}
        @endif



    {{-- o form é maiusculo e sempre olhar se é plural ou singular --}}
    {!!Form::label('titulo', 'Titulo:', ['class'=> 'form-check-label'])!!}
    {!!Form::text('titulo', isset($livro) ? $livro->titulo : null,
    ['class'=> 'form-control', 'placeholder' => 'Digite o titulo', $form??null])!!}

    {!!Form::label('autor', 'Autor:', ['class'=> 'form-check-label'])!!}
    {!!Form::select('autor', $autor, isset($livro) ? $livro->$autor: null,
    ['class' => 'form-control', isset($form) ? $form : null])!!}

    {!!Form::label('editora', 'Editora:', ['class'=> 'form-check-label'])!!}
    {!!Form::select('editora', $editora, isset($livro) ? $livro->$editora: null,
    ['class' => 'form-control', isset($form) ? $form : null])!!}

    {{-- dd serve pra saber se se o codigo ta quebrando ou nao --}}

    @foreach ($genero as $gener)

    {!!Form::label("genero[]", $gener, ['class' => 'labelmargem'])!!}
    {!!Form::checkbox("genero[]",$loop->iteration, false, ['id'=> 'genero',
    isset($form) ? $form : null])!!}

    {{-- {!!Form::checkbox('genero','value')!!} --}}
    @endforeach
    {!! Form::submit('Salvar', ['class'=> 'btn btn-sucess', $form??null]) !!}
    {!! Form::close() !!}
    </body>
    </html>
