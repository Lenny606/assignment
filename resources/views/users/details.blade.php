@extends('layouts/main', [
    "current_page" => "users"
])

@section('content') 
    <h1>HEADLINE</h1>
    <p>Hello from Details page</p>

    @auth
    <h2>Detail of user {{$user->name}}</h2>
          
        
    <form  class="form" action="/update" method="post">
         @csrf
         @method("PUT")
         <ul style="text-align:left;"> 
        <input type="hidden" name="id" value="{{$user->id}}"/>
        <label for="name">Name: </label><br>
        <input type="text" name="name" value="{{$user->name}}"/><br>
        <label for="email">Email: </label><br>
        <input type="text" name="email" value="{{$user->email}}"/><br><br>        
        <input type="submit" value="Update">  
    </ul>
    <form>  
     
        <a href="/home"><button>HOME</button></a>
    @endauth    
   
 @endsection