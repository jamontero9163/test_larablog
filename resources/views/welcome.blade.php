@extends('dashboard.post.master')

@section('content')
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
        
</ul>
    <div align="center">
        <h1>LARAVEL</h1>
        @auth
        {{auth()->user()->name}}
        @endauth
    </div>
@endsection