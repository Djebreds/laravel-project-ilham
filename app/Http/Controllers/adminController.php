<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function readAdmin()
    {
        return view('data-admin', [
            "title" => "Data Admin"
        ]);
    }

    public function createAdmin()
    {
        return view('create-admin', [
            "title" => "Daftarkan Admin"
        ]);
    }
}
