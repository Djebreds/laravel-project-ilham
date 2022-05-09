<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class genreController extends Controller
{
    public function readGenre()
    {
        return view('data-genre', [
            "title" => "Data Genre"
        ]);
    }
}
