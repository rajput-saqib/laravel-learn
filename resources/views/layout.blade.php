<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">

        <style type="text/css">
            ul {
                list-style: none;
            }

            ul li {
                background: grey;
                color: blue;
                padding: 10px;
                margin: 10px;
            }

            ul li a{
                background: white;
                color: red;
                padding: 10px;
                margin: 10px;
            }
        </style>
    </head>
    <body>
    <ul>
        <li> <a href="{{route('user_listing')}}">Users</a></li>
        <li> <a href="{{url('profile_listing')}}">Profiles</a></li>
        <li> <a href="{{action('RolesController@show', ['1'])}}">Roles</a></li>

    </ul>

        @yield('content')

        {{-- Hidden comment --}}
        <!--Show comment-->
        <p>&copy; Arpatech</p>
    </body>

    <script type="text/javascript" src="{{asset('public/js/app.js')}}"></script>
</html>