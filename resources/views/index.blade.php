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


    <table id="lista" class="display table table-borderless table-hover table-success text-center">
        <!-- Cabeçalho da tabela -->
        <thead>
            <tr>
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
                    @php
                        ++$i;
                    @endphp
                    <td>{{ $game->nome }}</td>
                    <td>{{ $game->fps }}</td>
                    <td>{{ $game->preset }}</td>
                    <td>
                        <form action="{{ route('games.destroy', $game->id) }}" method="POST">

                            <a class="btn btn-sm btn-info" href="{{ route('games.show', $game->id) }}">
                                Visualizar
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                    <path fill-rule="evenodd"
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                            </a>

                            <a class="btn btn-sm btn-primary" href="{{ route('games.edit', $game->id) }}">
                                Editar
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
