    @extends('layout')

    @section('title', 'All Users Page')

    @section('content')
        <ul>
            @foreach ($users as $key => $val)
                <li>
                    <a href="{{action('UserController@show', [$val->id])}}">
                        User Name: <b>{{$val->username}} </b> |
                        Role: <b>{{$val->role->role_name}}</b> |
                        Full Name: <b>{{$val->profile['fullname']}}</b> |
                        Mobile No: <b>{{$val->profile['phone']}}</b>
                    </a>
                </li>
            @endforeach
        </ul>
    @endsection
