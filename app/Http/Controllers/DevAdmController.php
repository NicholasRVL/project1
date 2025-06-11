<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DevAdmController extends Controller
{
    
    public function index(){

        $users = User::where('level', 'admin')->get();
        return view('developer.admlist', compact('users'));
    }

    public function promote(Request $request, $id){
        $user = User::findOrFail($id);

        $level = $request->input('level');
        $user->level = $level;
        $user->save();

        return redirect()->back()->with('success', "User berhasil dipromosikan jadi $level");
    }

}
