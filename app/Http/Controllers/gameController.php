<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class gameController extends Controller
{
    public function createGame()
    {
        $genreList = DB::table('genre')->orderBy('nama_genre')->get();
        $pubList = DB::table('publisher')->orderBy('nama_publisher')->get();

        return view('create-game', [
            "title" => "Tambah Game",
            "genreList" => $genreList,
            "pubList" => $pubList

        ]);
    }

    public function storeGame(Request $request)
    {
        DB::table('game')->insert([
            'nama_game' => $request->nama_game,
            'tgl_rilis' => $request->tgl_rilis,
            'nama_publisher' => $request->publisher,
            'desc_game' => $request->desc_game
        ]);

        $this->validate($request, [
            'nama_game' => 'required',

        ]);
    }

    public function readGame()
    {
        $game = DB::table('game')->join('game_genre', 'game.id_game', '=', 'game_genre.id_game')->get();

        return view('data-game', [
            "title" => "Data Game",
            "game" => $game,
        ]);
    }

    public function updateGame()
    {
        return view('update-game', [
            "title" => "Update Game"
        ]);
    }

    public function detailGameAdmin($slug)
    {
        $detail = [];
        $game = Game::all();
        foreach ($game as $data) {
            if ($data['slug'] === $slug) {
                $detail = $data;
            }
        };
        return view('detail-game-admin', [
            "title" => "Detail Game",
            "gameData" => $detail
        ]);
    }
}
