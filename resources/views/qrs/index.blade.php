@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">{{ __('Qr') }}</h3>
                    {{-- crear un div para q el btn est al fondo derecha --}}
                    <div class="float-right">
                        <a href="{{route('qr.create')}}" class="btn btn-outline-dark">Crear</a>
                    </div>

                </div>
                <div class="card-body">
                    {{-- tabla para la preguntas --}}
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Pts</th>
                                <th scope="col">¿Activo?</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($qrs as $qr)
                                <tr>
                                    <th scope="row">{{ $qr->id }}</th>
                                    <td>{{ $qr->code }}</td>
                                    <td>{{ $qr->pts }}</td>
                                    <td>{{ $qr->active }}</td>
                                    <td>
                                        <a href="{{ route('qr.destroy', ['id' => $qr->id]) }}" class="btn btn-danger">Eliminar</a>
                                        <a href="{{ route('qr.edit', ['id' => $qr->id]) }}" class="btn btn-primary">Editar</a>
                                        {{-- <a href="{{ route('qr.show', ['id' => $qr->id]) }}" class="btn btn-warning">Ver</a> --}}
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
