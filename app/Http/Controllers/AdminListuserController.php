<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminListuserController extends Controller
{
    public function index(){

        $title = 'List User';
        $users = User::where('level', 'user')->get();
        return view('admin.listuser', compact('users', 'title'));
    }

}
