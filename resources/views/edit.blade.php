@extends('layout')

@section('content')

    <div class="alert alert-primary text-center container-fluid" role="alert">
        <h4 class="alert-heading text-center"> Editar jogo </h4>
        <p> Faça as alterações corretamente, conforme o exemplo de
            cada campo. </p>
        <hr>
        <div class="pull-right" style="padding-top: 10px;">
            <a class="btn btn-primary" href="{{ route('games.index') }}"> Voltar para a lista </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> Game Over. </strong> Você esqueceu de preencher alguns campos. Preencha e clique no botão de salvar
            novamente.
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome"> Nome: </label>
                <input type="text" name="nome" class="form-control" value="{{ $game->nome }}">
            </div>
            <div class="form-group col-md-6">
                <label for="fps"> FPS: </label>
                <input type="number" class="form-control" name="fps" value="{{ $game->fps }}">
            </div>
        </div>
        <div class="form-group">
            <label for="preset"> Preset: </label>
            <select name="preset" class="form-control">
                <option selected> {{ $game->preset }}  </option>
                <option> Ultra Baixo </option>
                <option> Baixo </option>
                <option> Médio </option>
                <option> Alto </option>
                <option> Ultra </option>
            </select>
        </div>
        <div class="form-group">
            <label for="resolucao"> Resolução: </label>
            <select name="resolucao" class="form-control">
                <option selected > {{ $game->resolucao }} </option>
                <option> 1280x720 </option>
                <option> 1360x768 </option>
                <option> 1366x768 </option>
                <option> 1600x900 </option>
                <option> 1920x1080 </option>
            </select>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="versao_driver"> Ver. Driver: </label>
                <input type="text" name="versao_driver" class="form-control" value="{{ $game->versao_driver }}">
            </div>
            <div class="form-group col-md-6">
                <label for="dado_cadastrado_por"> Dado Cadastrado Por: </label>
                <input type="text" class="form-control" name="dado_cadastrado_por" value="{{ $game->dado_cadastrado_por }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="observacao"> Observação: </label>
                <textarea class="form-control" name="observacao" type="text" cols="30" rows="5"> {{ $game->observacao }} </textarea>
            </div>
        </div>

        <div class="text-center"><button type="submit" class="btn btn-primary "> Salvar jogo </button></div>
    </form>
@endsection
