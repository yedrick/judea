@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">{{ __('Preguntas') }}</h3>
                    {{-- crear un div para q el btn est al fondo derecha --}}
                    <div class="float-right">
                        <a href="{{route('question.create')}}" class="btn btn-outline-dark">Crear</a>
                    </div>

                </div>
                <div class="card-body">
                    {{-- tabla para la preguntas --}}
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Pregunta</th>
                                <th scope="col">tipo</th>
                                <th scope="col">Respuestas incorrectas</th>
                                <th scope="col">Respuesta correcta</th>
                                <th scope="col">Imagen</th>
                                {{-- <th scope="col">Puntos</th> --}}
                                <th scope="col">Estado</th>
                                <th scope="col">¿Activo?</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <th scope="row">{{ $question->id }}</th>
                                    <td>{{ $question->code }}</td>
                                    <td>{{ $question->question }}</td>
                                    <td>{{ $question->type }}</td>
                                    <td>{{ $question->incorrect_answers }}</td>
                                    <td>{{ $question->correct_answer }}</td>
                                    <td>
                                        @if ($question->image == null)
                                            No hay imagen
                                        @else
                                            {{-- <img src="{{ asset($question->image) }}" alt="imagen" width="50"> --}}
                                            <a href="{{ asset($question->image) }}" target="_blanck">ver</a>
                                        @endif
                                    </td>
                                    {{-- <td>{{ $question->points }}</td> --}}
                                    <td>{{ $question->status }}</td>
                                    <td>{{ $question->active }}</td>
                                    <td>
                                        <a href="{{ route('question.destroy', ['id' => $question->id]) }}" class="btn btn-danger">Eliminar</a>
                                        <a href="{{ route('question.show', ['id' => $question->id]) }}" class="btn btn-warning">Ver</a>
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
