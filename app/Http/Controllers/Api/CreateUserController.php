<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFormRequest;
use App\Models\Users;

class FormController extends Controller
{
    public function create()
      
  {      
  
    $record = new Animal;
    
   
    return view('index.create', compact('record'));
}

public function store(CreateFormRequest $request)
    {
        // prepare empty object
        $user = new User;
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
    
        // save the user into DB
        $user->save();
        // session()->flash("success_message", "Animal has been saved succesfully");

        return redirect( url('/') );
    }

    // public function edit($id)
    // {
    //     $animal = Animal::findOrFail($id);

    //     return view('/create', compact('movie'));
    // }


}
