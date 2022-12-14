<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fichas de personagens</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    {{-- Imagem de background e fonte que não funcionou direto no sass --}}
    <style>
        body {
            background-image: url('/img/homepage_girl.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        @font-face {
            font-family: 'devinne_swashregular';
            src: url('/font/devinneswash-qzd5-webfont.woff2') format('woff2'),
                url('/font/devinneswash-qzd5-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>

<body>
    {{-- Titulo --}}
    <br>
    <h1>&emsp;Fichas de Personagens &#127993;</h1>
    <br />
    {{-- Subtitulo --}}
    <h3>&ensp;Para onde deseja ir, jovem aventureiro?</h3>
    {{-- Botão de listar personagens --}}
    &ensp;<a type="button" class="btn btn-primary" href="{{ route('personagens.index') }}">Listar personagens criados</a>
    <br /><br />
    {{-- Botão de criar personagem --}}
    &ensp;<a type="button" class="btn btn-success" href="{{ route('personagens.create') }}">Criar personagem</a>
</body>

</html>
