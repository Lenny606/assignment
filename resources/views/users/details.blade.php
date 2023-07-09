@extends('layouts/main', [
    "current_page" => "users"
])

@section('content') 
    <h1>HEADLINE</h1>
    <p>Hello from Details page</p>
    <h2>Detail of user {{$user->name}}</h2>
    <ul style="text-align:left;">
       
        {{-- <li><b>{{$user->id}}</b></li>           
        <li><b>Name:</b>  {{$user->name}}</li>
        <li><b>Email:</b> {{$user->email}}</li>
        <li><b>Password:</b> {{$user->password}}</li> --}}
        <form action="/update" method="post">
         @csrf
         @method("PUT")
        <input type="hidden" name="id" value="{{$user->id}}"/>
        <label for="name">Name: </label><br>
        <input type="text" name="name" value="{{$user->name}}"/><br>
        <label for="email">Email: </label><br>
        <input type="text" name="email" value="{{$user->email}}"/><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password"/><br>
        <label for="password_confirm">Password Confirm:</label><br>
        <input type="password" name="password_confirm"/><br><br>
        <input type="submit" value="Update">  
       <form>
    </ul>
 @endsection