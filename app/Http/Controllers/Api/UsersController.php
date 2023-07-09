<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UsersController extends Controller
{
    //get all the users
    public function getUsers()
    {
        return User::all();
    }

    public function addUsers(Request $request) {
        {   
            $rules = array(
                "id" => "string|integer",
                "name" => "string|required|max:50",
                "email" => "string",
                "password" => "required",
            );

            $messages = [
                "string" => "that is not a string",
                "integer" => "that is not a integer",
                "required" => "value is missing",
                "max:50" => "number of characters exceeded"
            ];


            $isValid = Validator::make($request->all(), $rules, $messages);
           

            $user = new User;
            $user->id = $request->id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;

            $result = $user->save();

            $isValid = Validator::make($request->all(), $rules, $messages);
            if ($isValid->fails())
            {
                return response()->json($isValid->errors(), 400);
            } else {
                return ["result"=>"user added successfully"];
            };
        }

    }

    public function getSortedUsersByName()
    {
        return User::orderBy('name')
            ->get();
    }

    public function getUsersById($id)
    {
        return User::select('name', 'email')
        ->where('id', '=', $id)
        ->get();
            
    }

    public function updateUsersById(Request $request, $id)
    {
       
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;    
        
        $result = $user->save();

          if ($result)
            {
                return "user updated successfully";
            } else {
                return "update user failed";
            };
            
    }


    public function deleteUsersById($id)
    {
        $user = User::findOrFail($id);  //automatically sends status code 404 if resource is not found
        $user->delete();

        return [ "result" => "user was deleted"];
    }

    public function searchUserByName($name)
    {
        $users = User::where('name', 'like' , '%'.$name.'%')->get('name');
        $count = count($users);

        if (count($users) !== 0){

            return response()->json( ["count" => $count, "users" => $users], 200);
        } else {
            return response()->json(["result" => "no users found"], 404);
        }

    }
}    
