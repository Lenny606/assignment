<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   @vite(['resources/js/script.js'])
</head>
<body>
    <h1>HEADLINE</h1>
    <p>Hello World</p>

<form action="{{route("register")}}" method="post">
        @csrf
        <label for="name">Name: </label><br> 
        <input type="text" name="name"><br>
        <label for="email">Email: </label><br> 
        <input type="email" name="email"><br>
        <label for="password">Password: </label><br> 
        @error('password')
        <p style="color:red">Please enter your password in right format</p>
        @enderror
        <input type="password" name="password"><br>
        <label for="password">Password Confirm:</label><br> 
        <input type="password_confirmation" name="password_confirmation"><br> <br>
        <input type="submit" value="Create User">
</form>
    {{-- <button onclick="getUsers()" id="btn">BTN</button> --}}
</body>
</html>