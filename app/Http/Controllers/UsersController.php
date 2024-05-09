<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list()
    {
        $users = User::all();
        return view('users.list',compact(['users']));
    }
}
