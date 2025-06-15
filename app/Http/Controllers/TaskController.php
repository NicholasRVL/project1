<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{
      public function index()
    {
        $title = 'Tasks';
        $tasks = Task::where('user_id', auth()->id())->latest()->get();
        return view('user.index', compact('tasks', 'title'));

    }
    

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);

         Task::create([
            'title' => $request->title,
            'notes' =>$request->notes,
            'user_id' => auth()->id(), 
            'is_done' => false,
         ]);

        return redirect()->route('tasks.index')->with('success', 'Task created!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
    
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }

 

    public function edit(Task $task){
        return view('user.edit', compact('task'));

    }

     public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task->update([
            'title' => $request->title,
        ]);

        return redirect()->route('tasks.index');
    }

    public function show(Task $task){
        
        return view('user.show', compact('task'));

    }

    public function toggle(Task $task)
    {

        $task->update(['is_done' => !$task->is_done]);
        return redirect()->route('tasks.index');
    }



}
