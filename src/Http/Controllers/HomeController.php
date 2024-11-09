<?php

namespace App\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return "Selamat anda berhasil Login";
    }
}