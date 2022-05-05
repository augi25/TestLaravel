@extends('layouts.app')

@section('content')
<div class="ui main text container">
    <h1 class="ui header">Créer un post</h1>
    <form class="ui form" action="{{route('app_store')}}" method="post">
        @csrf
        <div class="field">
            <label for="title">Titre</label>
            <input type="text" name="title" placeholder="Titre">
        </div>
        <div class="field">
            <label for="body">Contenu</label>
            <input type="text" name="body" placeholder="Description">
        </div>
        <div class="field">
            <select name="categories">
               @foreach()
            </select>
        </div>
        <button class="ui button" type="submit">Créer</button>
    </form>
</div>

@endsection