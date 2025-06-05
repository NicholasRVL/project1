<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
     public function index() {
        // ambil task sesuai user login
        $tasks = Auth::user()->tasks()->latest()->get(); 
        return view('user.index', compact('tasks'));
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $request->validate(['title' => 'required|string|max:255']);

        // buat task untuk user yg login
        Auth::user()->tasks()->create([
            'title' => $request->title
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created!');
    }

    public function show(Task $task) {
        $this->authorizeTask($task); // proteksi
        return view('user.show', compact('task'));
    }

    public function edit(Task $task) {
        $this->authorizeTask($task);
        return view('user.edit', compact('task'));
    }

    public function update(Request $request, Task $task) {
        $this->authorizeTask($task);

        $request->validate(['title' => 'required|string|max:255']);
        $task->update($request->only('title'));

        return redirect()->route('tasks.index')->with('success', 'Task updated!');
    }

    public function destroy(Task $task) {
        $this->authorizeTask($task);
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted!');
    }

    public function toggle(Task $task) {
        $this->authorizeTask($task);
        $task->update(['is_done' => !$task->is_done]);
        return redirect()->back();
    }

    protected function authorizeTask(Task $task)
    {
        if ($task->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
