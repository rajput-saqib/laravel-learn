    @extends('layout')
    @section('title', 'user detail')
    @section('content')
        <ul>
            <li>{{$user->username}} is {{$user->role->role_name}}</li>
        </ul>
    @endsection