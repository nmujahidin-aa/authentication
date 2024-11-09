<?php

namespace App\Controllers\Admin;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return "Selamat datang di halaman dashboard";
    }
}