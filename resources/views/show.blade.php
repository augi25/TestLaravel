@extends('layouts.app')

@section('content')
<div class="ui main text container">
    <h1 class="ui header">Post </h1>
    <h2>{{ $post -> body}}</h2>
    <h3>{{$post->created_at}}</h3>
    @foreach ($post ->categories as $category )
    <h1>{{$category->category}}</h1>

    @endforeach
</div>
@endsection