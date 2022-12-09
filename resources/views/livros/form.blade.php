<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @if (isset($livro)){
            <title> Visualização dos Livros</title>>
            @else
            <title> Criação dos Livros</title>>
            @endif
        }
    </head>
    <body>
        @csrf
        {{-- operador ternario --}}
        <label for="titulo" class="form-check-label">Titulo</label>
        <input placeholder="Digite o titulo" name="titulo" type="text"
        id="titulo" value="{{ isset($livro) ? $livro->titulo : null}}">
       {{-- olhar se tabela esta definido ou nao. é um if mais enxuto para melhor legibilidade
         isset($livro) ? $livro->titulo : null  }}
  operador ternario forma mais reduzida, as duas ?? são usadas pois serve como operador p/ sinalizar q está de forma reduzida
        {{           $livro->titulo??null }} --

{{-- @if (isset($livro)){{{$livro}}}
@endif--}}
{!!form::label('titulo', 'Titulo:', ['class'=> 'form-check-label'])!!}
{!!form::text('titulo', isset($livro) ? $livro->titulo : null,
['class'=> 'form-control', 'placeholder' => 'Digite o titulo', $form??null])!!}

{!!form::label('autor', 'Autor:', ['class'=> 'form-check-label'])!!}
{!!form::select('autor', $autores, isset($livro) ? $livro->$autor->id: null,
['class' => 'form-control', isset($form) ? $form : null])!!}

{{dd($autores)}}

{!!form::label('editora', 'Editora:', ['class'=> 'form-check-label'])!!}
{!!form::select('editora', $editoras, isset($livro) ? $livro->$editora->id: null,
['class' => 'form-control', isset($form) ? $form : null])!!}

{{dd($autores)}} {{-- dd serve pra saber se se o codigo ta quebrando ou nao --}}

</body>+
</html>
