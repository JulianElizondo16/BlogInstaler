@extends('adminlte::page')

@section('title', 'Cyber Fuel')

@section('content_header')
    @can('admin.roles.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.roles.create') }}">Nuevo Rol</a>
    @endcan

    <h1>Lista de los Roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px">
                                @can('admin.roles.edit')
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.roles.edit', $role) }}">Editar</a>
                                </td>
                            @endcan
                            <td width="10px">
                                @can('admin.roles.destroy')
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
