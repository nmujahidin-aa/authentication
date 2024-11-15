<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function post(){
        if(!Auth::check()){
            return redirect()->route("auth.login.index");
        }

        auth()->logout();
        return redirect()->route("auth.login.index");
    }
}
