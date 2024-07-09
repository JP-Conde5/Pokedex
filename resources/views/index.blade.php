@extends('layout')
@section('content')
<div class='jumbotron'>
    <div class='container-fluid'>
        <h1 class='mt-5 text-center'>Pokedex dos fãs</h1>
    </div>
</div>
<div class='container-fluid'>
    <div class="row">
        <div class='col-md-6'><img src="{{asset('storage/image/capa.jpg'}}" alt="capa"></div>
        <div class='col-md-6'>
        <p class='lead text-justify'>Pokémon são criaturas fictícias que pertencem ao universo da série de mesmo nome - Pokémon. Originalmente, a série foi criada como um jogo de videogame e, com a sua popularização, se espalhou para diversos outros formatos, como séries de TV, filmes e livros.</p>

        <p class='lead text-justify'>A palavra pokémon é a contração de duas palavras em inglês: pocket, que significa bolso; e monster, que significa monstro. Assim, um pokémon é um "monstro de bolso", na tradução literal.</p>

        <p class='lead text-justify'>Os jogos do gênero RPG da franquia Pokémon foram criados por Satoshi Tajiri em 1996. Com o sucesso do jogo, houve a adaptação para formatos de animação audiovisual, como animes (desenhos animados japoneses) e filmes.</p:>

        <p class='lead text-justify'>A maior parte dos pokémon sofrem metamorfoses, evoluindo para seres mais avançados e com uma estética diferente. Com o tempo também aprendem novas técnicas ou ataques, que podem utilizar em combate.</p>

        <p class='lead text-justify'>Com o sucesso do anime no final da década de 1990, surgiram vários outros jogos de Pokémon, os primeiros para console Game Boy, da empresa Nintendo. Mais tarde, foram criados jogos online de Pokémon, como o Pokémon Deluge e o Pokémon GO.</p>
        </div>
    </div>
</div>
@endsection