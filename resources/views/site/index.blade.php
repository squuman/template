@extends('layouts.app')

@section('title', 'Module')

@section('content')
    <div class="site-index">
        <a href="{{route('settings')}}" class="btn btn-primary">Перейти в настройки</a>
    </div>
@endsection
