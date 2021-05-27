@extends('dashboard.post.master')

@section('content')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input readonly type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="surname">Apellido</label>
            <input readonly type="text" class="form-control" name="surname" id="surname" value="{{$user->surname}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input readonly type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
        </div>
        
@endsection




