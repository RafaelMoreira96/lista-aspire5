@extends('layout')

@php
$i = 0;
@endphp

@section('content')

    <div class="alert alert-success text-center container-fluid" role="alert">
        <h4 class="alert-heading text-center"> Tabela de jogos </h4>
        <p> Caro usuário do Aspire 5, essa lista é feita pela comunidade e sem fins lucrativos! Peço encarecidamente que,
            quando puder, alimente nosso banco de dados, adicionando jogos que estão rodando.</p>
        <hr>
        <p class="mb-0">Modelos compatívels: A515 41G-1480 e A515 41G-13U1</p>
        <div class="pull-right" style="padding-top: 10px;">
            <a class="btn btn-success" href="{{ route('games.create') }}"> Adicionar um jogo </a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p> {{ $message }} </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <table id="lista" class="table">
        <!-- Cabeçalho da tabela -->
        <thead>
            <tr>
                <th scope="col"> Nº </th>
                <th scope="col"> Nome </th>
                <th scope="col"> FPS </th>
                <th scope="col"> Preset </th>
                <th scope="col"> Ações </th>
            </tr>
        </thead>

        <!-- Corpo da tabela -->
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td scope="row">{{ ++$i }}</td>
                    <td>{{ $game->nome }}</td>
                    <td>{{ $game->fps }}</td>
                    <td>{{ $game->preset }}</td>
                    <td>
                        <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('games.show', $game->id) }}"> Visualizar </a>
                            <a class="btn btn-primary" href="{{ route('games.edit', $game->id) }}"> Editar </a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Remover </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
