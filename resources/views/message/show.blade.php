@extends('message.layout')
@section('title', 'Single Message Detail')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <artical>
                    <h2>{{$msg->title}}</h2>
                    <p>{{$msg->body}}</p>
                </artical>
            </div>
        </div>
    </div>

@endsection
