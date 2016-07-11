@extends('layouts.app')
@section('posts')
    {!! $posts->render() !!}
    <div class="podstava" id="answer"></div>
    @foreach($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">#{{$post->id}} {{$post->title}}</div>
            <div class="panel-body">
                {!! $post->detail_text !!}
            </div>
        </div>
    @endforeach
    {!! $posts->render() !!}
@endsection