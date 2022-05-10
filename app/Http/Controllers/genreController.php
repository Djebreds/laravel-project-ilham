<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class genreController extends Controller
{
    public function readGenre()
    {
        $genre = DB::table('genre')->get();

        return view('data-genre', [
            "title" => "Data Genre",
            "genre" => $genre
        ]);
    }
}
