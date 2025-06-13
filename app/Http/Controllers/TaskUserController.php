<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskUserController extends Controller
{
    public function index(){

        $title = 'Tasks Users';
        $tasks = Task::all();
        $taskUdahDone = Task::where('is_done', true)->get();
        $taskBelumDone = Task::where('is_done', false)->get();
        return view('developer.taskuser', ['tasks' => $tasks], compact( 'taskUdahDone', 'taskBelumDone', 'title'));
    }

    public function showTasksUser($id) {
        $user = User::findOrFail($id);
        $tasks = Task::where('user_id', $id)->get(); 

        return view('developer.taskuser', compact('user', 'tasks'));
    }

    public function destroy(Task $task)
    {
        $task->delete();
    
        return redirect()->route('tasks.destroy')->with('success', 'Task deleted successfully');
    }

}
