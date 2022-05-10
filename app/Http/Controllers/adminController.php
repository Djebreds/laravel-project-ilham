<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function readAdmin()
    {
        $admin = DB::table('admin_login')->get();

        return view('data-admin', [
            "title" => "Data Admin",
            "admin" => $admin
        ]);
    }

    public function createAdmin()
    {
        return view('create-admin', [
            "title" => "Daftarkan Admin"
        ]);
    }
}
