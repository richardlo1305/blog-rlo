@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <a class="btn btn-secondary btn-sm  float-right" href="{{ route('admin.posts.create') }}">
        Crear Post
    </a>

    <h1>Listado de posts</h1>

    
@stop

@section('content')
    @if (session('info'))
                
    <div class="alert alert-success">{{ session('info') }}</div>

    @endif

    @livewire('admin.post-index')
@stop

