<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controls extends Controller
{
    public function adminDashboard()
    {
        return view('dashboard-admin', [
            "title" => "Admin Dashboard",
        ]);
    }
}
