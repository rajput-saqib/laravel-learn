@extends('message.layout')
@section('title', 'Create New Message')

@section('content')
    <form action="{{url('message/save')}}" method="post">
        <div class="form-group">
            @if( Session::has('message') )
                <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif
        </div>
        <div class="form-group">
            <span class="label">Title</span>
            <input type="text" name="title" id="inputTitle" />
        </div>
        <div class="form-group">
            <span class="label">Body</span>
            <input type="text" name="body" id="inputBody" />
        </div>

        <div class="form-group">
            {{csrf_field()}}
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
