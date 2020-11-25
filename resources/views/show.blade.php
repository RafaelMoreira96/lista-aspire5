@extends('layout')

@section('content')
    <div class="card mb-3">

        @if ($game->img == null)
            <img src="/img/sem_imagem.png" class="card-img-top" alt="..."
                style="height: 300px; object-fit: cover; object-position: center;">
        @else
            <img src={{ $game->img }} class="card-img-top" alt="..."
                style="height: 300px; object-fit: cover; object-position: center;">
        @endif

        <div class="card-body">
            <h3 class="card-title text-center"> {{ $game->nome }}</h3>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Média de FPS:</strong>
                    {{ $game->fps }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preset Gráfico:</strong>
                    {{ $game->preset }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Resolução:</strong>
                    {{ $game->resolucao }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Versão do Driver:</strong>
                    {{ $game->versao_driver }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Observações:</strong>
                    {{ $game->observacao }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dado cadastrado por:</strong>
                    {{ $game->dado_cadastrado_por }}
                </div>
            </div>
        </div>

        <div class="card-footer text-muted text-center">
            Adicionado em: {{ $game->created_at }}
            <br>
            Modificado em: {{ $game->updated_at }}
        </div>
        <a href="/" class="btn btn-primary"> Voltar para a lista </a>
    </div>

    @endsection
