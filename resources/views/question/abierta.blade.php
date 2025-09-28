@extends('layouts.app_q')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Preguntas Judea') }}</div>
                <div class="card-body">
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl my-10">
                        <div class="p-8">

                            <h2 class="text-lg font-semibold mb-4 text-center mt-2">{{ $question->question }}</h2>
                            <form action="{{ route('question.answer', ['code'=>$question->code]) }}" method="POST">
                                @csrf
                                <div class="mb-4 m-2">
                                    <label for="answer" class="form-label">Respuesta</label>
                                    <input type="text" class="form-control"  placeholder="Respuesta" name="answer" id="answer">
                                </div>
                                <div class="mt-6 flex justify-between text-center">
                                    <button class="px-4 py-2 bg-primary text-white rounded " type="submit">Skip</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
