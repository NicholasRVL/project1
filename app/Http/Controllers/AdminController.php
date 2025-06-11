<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

   public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('user.index')->with('success', 'users deleted successfully');
    }
}
