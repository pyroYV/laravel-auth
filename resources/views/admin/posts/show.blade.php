@extends('layouts.app')

@section('content')
<div class="container-lg">
    <div class="row">
        <h2>{{$post->post_title}}</h2><h4>Author: {{$post->post_author}}</h4>
        <div class="card p-2">
            {{$post->post_content}}
        </div>
        <span>{{$post->post_creation_date}}</span>
    </div>
</div>
@endsection
