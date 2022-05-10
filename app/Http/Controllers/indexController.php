<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class indexController extends Controller
{
    //
    public function index()
    {
        $game = DB::table('game')->join('game_genre', 'game.id_game', '=', 'game_genre.id_game')->get();

        return view('index', [
            "game" => $game
        ]);
    }
}
