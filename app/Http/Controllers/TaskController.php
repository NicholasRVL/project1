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
        // $tasks = Auth::user()->tasks()->latest()->get();
        // $tasks = Task::all();

        $tasks = Task::where('user_id', auth()->id())->latest()->get();
        return view('user.index', compact('tasks'));

    }
    

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);

        // Auth::user()->tasks()->create([
        //     'title' => $request->title
        // ]);

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
