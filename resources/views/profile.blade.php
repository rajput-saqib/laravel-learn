    @extends('layout')

    @section('title', 'Profile detail')
    @section('content')
        <ul>
            @foreach ($profile as $key => $val)
                <li>{{$val->fullname}} has username is {{$val->user['username']}}</li>
            @endforeach

        </ul>
    @endsection
