@extends("layouts/main", 
[
    "current_page" => "/"
])


@section('content')
    <h1>HEADLINE</h1>
    <p>Hello from Index page</p>
    
@auth
    <a href="/users"><button>Go to users list</button></a>
@endauth

@endsection   



{{-- <h4>{{$users->id}}</h4>
<h5>{{$users->email}}</h5>
<p><em>List of books:</em></p>
   --}}
{{--     
@if(($users->users->isEmpty())) 
    <p>There are no books in bookshop, sorry...</p>
@else 
<ul>
@foreach ($users->users as $user)

    <li>{{$user->id}}</li>
    @endforeach
</ul>
@endif  --}}

{{-- <form action="/api/users/id/delete" method="post">
    @csrf
    
    <label for="number">ID: </label><br> 
    <input type="number" name="id"><br>
      
    <br>        
    <input type="submit" value="Delete">
</form> --}}

</body>
</html>