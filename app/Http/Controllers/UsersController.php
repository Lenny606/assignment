<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();
       
        return view('users/users', compact('users'));
    }


    public function delete($id)
    {
        $user = User::findOrFail($id);
        $result = $user->delete();
       
        return redirect('/users');
    }

    public function details($id) {

        $user = User::findOrFail($id);
        
        return view('users/details', compact('user'));
    }

    public function update(Request $request) {

        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        
        return redirect('/users');
    }
}
