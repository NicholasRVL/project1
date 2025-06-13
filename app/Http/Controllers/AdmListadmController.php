<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdmListadmController extends Controller
{
    public function index(){
        $title = 'List Admin';
        $users = User::where('level', 'admin')->get();
        return view('admin.listadm', compact('users', 'title'));
    }

}
