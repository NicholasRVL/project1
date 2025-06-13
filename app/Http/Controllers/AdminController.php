<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $title = 'Admin';
        $tasks = Task::all();
        $jumUser = User::where('level', 'user')->count();
        $jumAdm = User::where('level', 'admin')->count();
        $taskUdahDone = Task::where('is_done', true)->get();
        $taskBelumDone = Task::where('is_done', false)->get();
        return view('admin.index', ['tasks' => $tasks], compact('jumUser', 'jumAdm', 'taskUdahDone', 'taskBelumDone', 'title'));
    }

   public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('user.index')->with('success', 'users deleted successfully');
    }
}
