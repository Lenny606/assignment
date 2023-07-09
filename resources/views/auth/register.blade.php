@extends('layouts/main', [
    "current_page" => "register"
])


@section('content')    
    <h1>HEADLINE</h1>
    <p>Hello from Register page</p>


<form action="{{route("register")}}" method="post">
        @csrf
        <label for="name">Name: </label><br> 
        <input type="text" name="name"><br>
        @error('name')
        <p style="color:red">Please enter your name</p>
        @enderror
        <label for="email">Email: </label><br> 
        <input type="email" name="email"><br>
        @error('email')
        <p style="color:red">Please enter your email</p>
        @enderror
        <label for="password">Password: </label><br>
        <input type="password" name="password"><br>
        @error('password')
        <p style="color:red">Please enter your password in right format</p>
        @enderror
        <label for="password">Password Confirm:</label><br> 
        <input type="password" name="password_confirmation"><br>
        @error('password')
        <p style="color:red">Please enter your password in right format</p>
        @enderror
        <br>        
        <input type="submit" value="Create User">
</form>
    {{-- <button onclick="getUsers()" id="btn">BTN</button> --}}
@endsection