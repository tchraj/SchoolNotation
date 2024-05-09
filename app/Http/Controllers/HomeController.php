<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getRole()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return view('layouts.base');
            } else {
                return view('welcome');
            }
        }
    }
}
