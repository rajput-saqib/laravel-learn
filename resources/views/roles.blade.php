@extends('layout')

@section('title', 'Role detail')
@section('content')
    <ul>
        @foreach ($role->user as $key => $val)
            <li><b>{{$val->username}} </b></li>
        @endforeach
    </ul>
@endsection