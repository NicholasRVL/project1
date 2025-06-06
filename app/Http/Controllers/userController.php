<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;


class UserController extends Controller
{

    public function index() {
        $tasks = Auth::user()->tasks()->latest()->get();
        return view('user.index', compact('tasks'));
        $user = Auth::user();
        $task = $user->tasks();
    }
    
    public function create() {
        return view('user.create');
    }
    

    public function store(Request $request) {
        $request->validate(['title' => 'required|string|max:255']);
        Auth::user()->tasks()->create([
            'title' => $request->title
        ]);
        return redirect()->route('tasks.index')->with('success', 'Task created!');
    }


    

    public function show(Task $task) {
        return view('user.show', compact('task'));
    }
    
    public function edit(Task $task) {

        return view('user.edit', compact('task'));
    }
    


}





