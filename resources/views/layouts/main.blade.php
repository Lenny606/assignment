<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   @vite(['resources/js/script.js', 'resources/css/app.css'])

    {{-- @yield('stylesheets')
    @yield('scripts') --}}
</head>
<body>

    @include('common/navigation', [
        // 'current_page' => $current_page ?? null
    ])

{{-- async js function only for testing purposes in console--}}
<script>
    const getUsers = async () => {
    const response = await fetch("/api/v1/users");
        const data = await response.json();
        console.log(data);
    }
       console.log(getUsers())
</script>



    @yield('content')

</body>
</html>