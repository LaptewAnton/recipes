@extends('layout')

@section('title')
    Рецепты
    @endsection

    @section('content')
    @include('components.recipes')
    {{$recipes->render()}}
    <br>
    </div>
@endsection
