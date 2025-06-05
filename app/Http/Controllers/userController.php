<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class UserController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks()->latest()->get();

        return view('user.index', compact('tasks'));
    }



}

