@extends('message.layout')
@section('title', 'Messages Listing')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @foreach($msg as $key => $value)
                <artical>
                    <h2>
                        <a href="{{url('message/show/'.$value->id)}}">
                            {{$value->title}}
                        </a>
                    </h2>
                    <p>{{$value->body}}</p>
                    <p>
                        <a href="{{url('/message/'.$value->id.'/edit')}}">Edit</a>
                        <a href="{{url('/message/delete/'.$value->id)}}">Delete</a>
                    </p>
                </artical>
                @endforeach
            </div>
        </div>
    </div>

@endsection
