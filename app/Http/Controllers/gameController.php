<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gameController extends Controller
{
    public function createGame()
    {
        return view('create-game', [
            "title" => "Tambah Game"
        ]);
    }

    public function readGame()
    {
        $game = Game::all();

        return view('data-game', [
            "title" => "Data Game",
            "gameData" => $game
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
