@extends("layouts/main", 
[
    "current_page" => "/"
])


@section('content')
    <h1>HEADLINE</h1>
    <p>Hello from Index page</p>
    <img src="https://picsum.photos/400/400?grayscale" alt=""> <br><br>
@auth
    <a href="/users"><button>Go to users list</button></a>
@endauth

@endsection   