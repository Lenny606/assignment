@extends('layouts/main', [
    "current_page" => "users"
])

@section('content') 
    <h1>HEADLINE</h1>
    <p>Hello from Users page</p>    
    <h2>List of current users</h2>
    @auth
    <ul style="text-align:center;">
        @if(($users->isEmpty())) 
        <p>There are no users in dtbase, sorry...</p>
        @else 
        @foreach ($users as $user)           
        <li style="list-style-type: none;"><b>Name of the User:</b> {{$user->name}}, <b>his ID is:</b> {{$user->id}}
            &#x270D &rArr; &rArr; &rArr; <a id={{$user->id}} href="/delete/{{$user->id}}"><button>Delete</button></a>
        <a id={{$user->id}} href="/details/{{$user->id}}"><button>Update</button></a>       
        </li>        
        @endforeach
        @endif
    </ul>
    @else
    <p>List available only for logged users, sorry...</p>
    @endauth
 @endsection

