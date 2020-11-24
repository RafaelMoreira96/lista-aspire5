@extends('layout')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <strong> Ficha completa </strong>
        </div>
        <div class="card-body">
            <h5 class="card-title">Jogo: {{ $game->nome }}</h5>

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

            <a href="/" class="btn btn-primary"> Voltar para a lista </a>
        </div>
        <div class="card-footer text-muted">
            Adicionado em: {{ $game->created_at }}
            <br>
            Modificado em: {{ $game->updated_at }}
        </div>
    </div>
@endsection
