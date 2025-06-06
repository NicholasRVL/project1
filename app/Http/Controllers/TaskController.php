<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;


class TaskController extends Controller
{
      public function index()
    {
        $tasks = Auth::user()->tasks()->latest()->get();
        return view('user.index', compact('tasks'));
    }
    

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);

        Auth::user()->tasks()->create([
            'title' => $request->title
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
    
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }

    public function edit(Task $task){


    }


}
