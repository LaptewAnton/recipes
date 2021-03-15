@extends('layout')

@section('title')
    Панель администратора
@endsection

@section('content')
    <a href="{{route('admin.recipes')}}">Рецептики</a>
    <a href="{{route('admin.users')}}">Пользователи</a>
@endsection
