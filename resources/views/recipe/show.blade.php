@extends('layout')

@section('title')
    Рецепт №{{$recipe->id}}
@endsection

@section('content')
    <div class="app shadow">
        <div class="app-img">
            <img class="app" src="/img/example.png">
        </div>
        <div class="app_about">
            <div class="app_about-title">
                <h2>{{$recipe->title}}</h2>
                <span>~{{$recipe->time}} минут | {{$recipe->difficulty->name}}</span>
                @if(Auth::check() == 1 && Auth::user()->id == $recipe->user_id || Auth::user()->admin == 1)
                    <a href="{{route('recipe_edit', $recipe->id)}}" class="button">Редактировать</a>
                @endif
            </div>
            <div class="app-description">
                <div class="app-category">
                    <p class="app-description-title">Автор:</p>
                    <p>{{$recipe->user->name}}</p>
                </div>
                <p class="app-description-title">Ингридиенты:</p>
                <p class="app-description-title">Рецепт:</p>
                <p>{{$recipe->description}}</p>
            </div>
        </div>
    </div>
@endsection
