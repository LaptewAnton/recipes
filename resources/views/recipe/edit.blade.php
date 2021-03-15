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
                <p>Название рецепта:</p>
                <input type="text" value="{{$recipe->title}}" placeholder="{{$recipe->title}}">
                <span>~{{$recipe->time}} минут </span><span>| {{$recipe->difficulty->name}}</span>
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
