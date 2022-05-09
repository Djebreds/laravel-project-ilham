<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class publisherController extends Controller
{
    public function readPublisher()
    {
        return view('data-publisher', [
            "title"  => "Data Publisher"
        ]);
    }

    public function createPublisher()
    {
        return view('create-publisher', [
            "title" => "Tambah Publisher"
        ]);
    }

    public function updatePublisher()
    {
        return view('update-publisher', [
            "title" => "Update Publiser"
        ]);
    }
}
