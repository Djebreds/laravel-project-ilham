<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class logAdminController extends Controller
{
    public function loginAdmin()
    {
        return view('login-admin', [
            "title" => "Admin Login",
        ]);
    }
}
