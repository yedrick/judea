@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">{{ __('Grupos') }}</h3>
                    {{-- crear un div para q el btn est al fondo derecha --}}
                    <div class="float-right">
                        <a href="{{route('group.create')}}" class="btn btn-outline-dark">Crear</a>
                    </div>

                </div>
                <div class="card-body">
                    {{-- tables --}}
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $group)
                                <tr>
                                    <th scope="row">{{ $group->id }}</th>
                                    <td>{{ $group->name }}</td>
                                    <td>
                                        <a href="{{ route('group.edit', ['id' => $group->id]) }}" class="btn btn-primary">Editar</a>
                                        <a href="{{ route('group.destroy', ['id' => $group->id]) }}" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
