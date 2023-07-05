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
        <label for="name">Name</label>
        <input type="text" name="name"><br> 
        <label for="email">Email</label>
        <input type="email" name="email"><br> 
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <label for="password">Password Confirm</label>
        <input type="password_confirm" name="password_confirm"><br> 
        <input type="submit" value="Create User">
</form>
    {{-- <button onclick="getUsers()" id="btn">BTN</button> --}}
</body>
</html>