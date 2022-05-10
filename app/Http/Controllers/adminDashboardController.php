<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class adminDashboardController extends Controller
{
    public function adminDashboard()
    {
        $gameData = DB::table('game')->join('game_genre', 'game.id_game', '=', 'game_genre.id_game')->get();
        $publisherData = DB::table('publisher')->get();
        $gernreData = DB::table('genre')->get();

        return view('dashboard-admin', [
            "title" => "Admin Dashboard",
            "game" => $gameData,
            "genre" => $gernreData,
            "publisher" => $publisherData
        ]);
    }
}
