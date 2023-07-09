@extends('layouts/main', [
    "current_page" => "login"
])

@section('content')   
    <h1>HEADLINE</h1>
    <p>Hello from Login page</p>

<form action="{{route("login")}}" method="post">
        @csrf
        
        <label for="email">Email: </label><br> 
        <input type="email" name="email"><br>
        @error('password')
        <p style="color:red">Please enter your email</p>
        @enderror
        <label for="password">Password: </label><br>
        <input type="password" name="password"><br>
        @error('password')
        <p style="color:red">Please enter your password in right format</p>
        @enderror
        
        <br>        
        <input type="submit" value="Login">
</form>
@endsection