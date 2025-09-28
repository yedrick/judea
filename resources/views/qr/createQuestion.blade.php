@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Crear Pregunta') }}</div>
                <div class="card-body">
                    <form action="{{ route('question.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Pregunta -->
                        <div class="mb-3">
                            <label for="question" class="form-label">Pregunta</label>
                            <input type="text" class="form-control" id="question" name="question">
                        </div>

                        <!-- Radios de selección -->
                        <div x-data="{ selectedOption: '', incorrectAnswers: [], newAnswer: '' }" class="mb-3">
                            <!-- Radios -->
                            <div class="flex justify-around mb-4">
                                <span>Seleccione el tipo</span><br>
                                <label class="flex items-center w-full cursor-pointer p-4">
                                    <input type="radio" name="options" value="multiple" x-model="selectedOption" class="mr-2">
                                    <span class="w-full text-center">Múltiple</span>
                                </label>
                                <label class="flex items-center w-full cursor-pointer p-4">
                                    <input type="radio" name="options" value="abierta" x-model="selectedOption" class="mr-2">
                                    <span class="w-full text-center">Abierta</span>
                                </label>
                                <label class="flex items-center w-full cursor-pointer p-4">
                                    <input type="radio" name="options" value="imagen" x-model="selectedOption" class="mr-2">
                                    <span class="w-full text-center">Imagen</span>
                                </label>
                            </div>

                            <!-- Div de 'Múltiple' -->
                            <div x-show="selectedOption === 'multiple'" class="w-full bg-blue-100 p-2 rounded-lg mb-4">
                                <h3 class="text-lg font-semibold text-center mb-4">Opción Múltiple</h3>

                                <!-- Campo para ingresar respuestas incorrectas -->
                                <div class="flex items-center mb-4 w-full">
                                    <input type="text" x-model="newAnswer" placeholder="Respuesta incorrecta" class="w-full p-2 border border-gray-300 rounded-md">
                                    <button type="button" @click="if(newAnswer !== '') { incorrectAnswers.push(newAnswer); newAnswer = ''; }" class="ml-2 px-4 py-2 bg-secondary text-white rounded-md">
                                        Agregar +
                                    </button>
                                </div>

                                <!-- Mostrar las respuestas incorrectas añadidas -->
                                <template x-for="(answer, index) in incorrectAnswers" :key="index">
                                    <div class="flex items-center mb-2 w-full">
                                        <input type="text" :value="answer" readonly class="w-full p-2 border border-gray-300 rounded-md mr-2">
                                        <button type="button" @click="incorrectAnswers.splice(index, 1)" class="px-2 py-1 bg-secondary text-white rounded-md">
                                            X
                                        </button>
                                    </div>
                                </template>

                                <!-- Campo oculto para enviar respuestas incorrectas -->
                                <input type="hidden" name="incorrect_answers" :value="JSON.stringify(incorrectAnswers)">
                            </div>

                            <!-- Div de 'Abierta' -->
                            <div x-show="selectedOption === 'abierta'" class="w-full bg-green-100 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold text-center">Opción Abierta</h3>
                            </div>

                            <!-- Div de 'Imagen' -->
                            <div x-show="selectedOption === 'imagen'" class="w-full bg-green-100 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold text-center">Opción Imagen</h3>
                                <div class="">
                                    <label for="correct_answer" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                        </div>

                        <!-- Respuesta correcta -->
                        <div class="mb-3">
                            <label for="correct_answer" class="form-label">Respuesta correcta</label>
                            <input type="text" class="form-control" id="correct_answer" name="correct_answer">
                        </div>

                        <!-- Puntos -->
                        <div class="mb-3">
                            <label for="points" class="form-label">Puntos</label>
                            <input type="text" class="form-control" id="points" name="points" value="1">
                        </div>

                        <!-- Botón de enviar -->
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
