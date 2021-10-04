@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <p>Nombre:</p>
            <p class="form-control">{{ $user->name }}</p>

            <h2 class="h5">Listado de roles</h2>

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put' ]) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {{-- {!! Form::radio('role', $role->id, true, ['class' => 'mr-1']) !!} --}}
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{ $role->name }}
                            {{ $role->id }}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar role', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop