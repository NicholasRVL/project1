<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DevUserController extends Controller
{
    public function index(){
        $title = 'List User';
        $users = User::where('level', 'user')->get();
        return view('developer.userlist', compact('users', 'title' ));
    }

    
}
