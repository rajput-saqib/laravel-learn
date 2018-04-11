@extends('message.layout')
@section('title', 'Edit Message')

@section('content')
    <form action="{{url('message/update')}}" method="post">
        <div class="form-group">
            @if( Session::has('message') )
                <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif
        </div>
        <div class="form-group">
            <span class="label">Title</span>
            <input type="text" name="title" id="inputTitle" value="{{$msg->title}}"/>
        </div>
        <div class="form-group">
            <span class="label">Body</span>
            <input type="text" name="body" id="inputBody" value="{{$msg->body}}"/>
        </div>

        <div class="form-group">
            {{csrf_field()}}
            <input type="hidden" name="id" id="id" value="{{$msg->id}}"/>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
