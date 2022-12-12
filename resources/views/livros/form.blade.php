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

</body>
</html>
