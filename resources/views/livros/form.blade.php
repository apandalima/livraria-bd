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
        {{           isset($livro) ? $livro->titulo : null  }}
  operador ternario forma mais reduzida, as duas ?? são usadas pois serve como operador p/ sinalizar q está de forma reduzida
        {{           $livro->titulo??null }} --}}


    </body>
</html>

@if (isset($livro)){
    {{$livro}}
}

@endif

{{$autor}}
{{$genero}}
{{$editora}}
