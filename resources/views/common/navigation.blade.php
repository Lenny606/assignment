@php
    $links = [
        
        'login' => 'Login',
        'register' => 'Register'

    ];
@endphp

<nav>

    @foreach ($links as $route => $label)

    @auth

    @else 

        @if ($current_page == $route)
            <span>{{ $label }}</span>
        @else
            <a href="{{ route($route) }}">{{ $label }}</a>
        @endif
        @endauth 

    @endforeach

    @auth        

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <a>{{ Auth::user()->name }}</a>
            <a><button>Log out</button></a>
        </form>

    @else 
 
        <a><<<<=====</a>

    @endauth    

    @can('admin')
        <a href="{{ route('admin.home') }}">Administration</a>
    @endcan

</nav>