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
        $result = User::select("id","name", "email")->get();

        if( count($result) === 0) {
            $result = "No users in database";
            return response()->json($result, 404);
        };

        return response()->json($result, 200);
    }

    //create the user
    public function addUsers(Request $request) {
        {   
            $rules = array(
                "id" => "integer",
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

            $user = new User;
            $user->id = $request->id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $result = $user->save();

            $isValid = Validator::make($request->all(), $rules, $messages);

            if ($isValid->fails())            {
                return response()->json($isValid->errors(), 400);                
            } else {
                return response()->json(["result"=>"user added successfully", "user" => $user], 201);
            };
        }

    }

    //get the users by his ID
    public function getUsersById($id)
    {
        $result = User::select('name', 'email')
        ->where('id', '=', $id)
        ->get();
        
        if (count($result) === 0) {
            $result = "users doesnt exist";
            return response()->json($result,404);
        } else {        
            return response()->json($result,200)->header();
        };
        
        
    }

    //update the user by his ID
    public function updateUsersById(Request $request, $id)
    {
       
        $user = User::findOrFail($id); //findOrFail() automatically sends status code 404 if resource is not found
        

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

    
    //delete the user by his ID
    public function deleteUsersById($id)
    {
        $user = User::find($id);  
        if(!$user){
            return response()->json(["result" => "no such user"], 404);
        } else {
            $user->delete();
            return response()->json([ "result" => "user was deleted"], 204);
        };
    }

    
    //search the users by their name
    public function searchUserByName($name)
    {
        $users = User::where('name', 'like' , '%'.$name.'%')->get('name');       

        if (count($users) !== 0){

            return response()->json( ["count" => $count, "users" => $users], 200);

        } else {

            return response()->json(["result" => "no user has benn found"], 404);
        }

    }
}    
