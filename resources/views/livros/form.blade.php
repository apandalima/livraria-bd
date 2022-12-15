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
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" href= "{{asset('/css/app.css')}}">
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
                {{-- {{Form::hidden('_method','PUT')}} --}}


                {{-- Se usa o put  no update e no store se usa o post --}}
        @endif

        <div class= "card container">
            <h4> Titulo: </h4>
    {{-- o form é maiusculo e sempre olhar se é plural ou singular --}}
    {!!Form::label('titulo', 'Titulo:', ['class'=> 'form-check-label'])!!}
    {!!Form::text('titulo', isset($livro) ? $livro->titulo : null,
    ['class'=> 'form-control', 'placeholder' => 'Digite o titulo', $form??null])!!}
    </div>
    <div class= "card container">

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

    {{-- if para esconder o botão no show, empty é o conntrario de isset--}}
    @if (empty($form))
        {!! Form::submit('Salvar', ['class'=> 'btn btn-sucess', $form??null]) !!}

    @endif

    {!! Form::close() !!}
        {{-- Botão de deletar personagem, se existir --}}
    @if (isset($livro) && empty($form))
        {!! Form::open(['route' => array('livros.destroy', $livro->id), 'method' => 'DELETE', 'name' => 'form'])!!}
        {!! Form::submit('Excluir', ['class' => 'btn btn-danger', $form??null])!!}
        {!! Form::close() !!}
    @endif
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    </body>
    </html>
