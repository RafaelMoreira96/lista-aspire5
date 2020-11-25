<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all(); // Esta linha está puxando todos os dados da tabela 'Game'
        return view('index', compact('games')); //aqui vai retornar a view index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create'); //Vai redirecionar para a view 'create'
    }

    /**
     * Aqui é a função que salva os dados no BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'nome' => 'required',
            'fps' => 'required',
            'preset' => 'required',
            'resolucao' => 'required',
            'versao_driver' => 'required',
            'observacao' => 'nullable',
            'dado_cadastrado_por' => 'nullable',
            'img' => 'nullable'
        ]);

        // Operação para salvar
        Game::create($request->all());

        // Redirecionamento para a página principal com mensagem de sucesso!
        return redirect()->route('games.index')->with('success', 'Jogo salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        // Validação
        $request->validate([
            'nome' => 'required',
            'fps' => 'required',
            'preset' => 'required',
            'resolucao' => 'required',
            'versao_driver' => 'required',
            'observacao' => 'nullable',
            'dado_cadastrado_por' => 'nullable',
            'img' => 'nullable'
        ]);

        // Operação para atualizar
        $game->update($request->all());

        // Redirecionamento para a página principal com mensagem de sucesso!
        return redirect()->route('games.index')->with('success', 'Jogo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Jogo removido com sucesso!');
    }
}
