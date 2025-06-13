<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DeveloperController extends Controller
{
 
    public function index()
    {
        $title = 'Developer';
        $tasks = Task::all();
        $jumUser = User::where('level', 'user')->count();
        $jumAdm = User::where('level', 'admin')->count();
        $taskUdahDone = Task::where('is_done', true)->get();
        $taskBelumDone = Task::where('is_done', false)->get();
        return view('developer.index', ['tasks' => $tasks], compact('jumUser', 'jumAdm', 'taskUdahDone', 'taskBelumDone', 'title'));
    }

    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('user.index')->with('success', 'users deleted successfully');
    }


    
    
}
