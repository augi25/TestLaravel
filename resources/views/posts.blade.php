@extends('layouts.app')

@section('content')
<div class="ui main text container">
    <h1 class="ui header">Liste des postes</h1>
</div>
<div class="ui cards">
    @if($posts ->count() > 0)
    @foreach($posts as $post)
    <div class="card">
        <div class="content">
            <div class="header">
                <h2><a href="{{route('app_show', ['id' => $post-> id])}}">{{ $post ->title}}</a></h2>
                <form action="{{route('app_delete',['id' =>$post->id])}}">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
            <div class="meta">
                @foreach ($post ->categories as $category )
                    {{$category->category}}
                @endforeach
            <h1></h1>
            </div>
            <div class="description">
                {{ $post ->body|substr(20,200)}}
            </div>
        </div>
        <div class="extra content">
            <div class="ui two buttons">
                <div class="ui basic green button"> <a href="#">Modifier</a></div>
                <div class="ui basic red button"> <a href="{{route('app_delete',['id' =>$post->id])}}">supprimer</a></div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <p>No posts found</p>
    @endif
</div>

@endsection

