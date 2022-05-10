<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class publisherController extends Controller
{
    public function readPublisher()
    {
        $publisher = DB::table('publisher')->get();

        return view('data-publisher', [
            "title"  => "Data Publisher",
            "publisher" => $publisher
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
