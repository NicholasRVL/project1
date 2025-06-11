<?php


namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function index() {
        $tasks = Auth::user()->tasks()->latest()->get();
        $user = Auth::user();
        $task = $user->tasks();
        return view('user.userHome', compact('tasks'));
        
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

    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('user.index')->with('success', 'users deleted successfully');
    }

    


}





