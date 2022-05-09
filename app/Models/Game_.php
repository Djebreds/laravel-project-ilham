<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Game //extends Model
{
    //    use HasFactory;
    private static $game = [
        [
            "gameName" => "Game 1",
            "slug" => "game-1",
            "releaseDate" => "tanggal 1",
            "publisher" => "PT 1",
            "genre" => "Adventure"
        ],
        [
            "gameName" => "game 2",
            "slug" => "game-2",
            "releaseDate" => "Tanggal 2",
            "publisher" => "PT 2",
            "genre" => "Action"
        ]
    ];


    public static function all()
    {
        return self::$game;
    }
}
