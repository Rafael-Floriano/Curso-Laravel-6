<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index (){
        $users = User::paginate(15);
        return view('users.index', compact('users'));
    }
}
