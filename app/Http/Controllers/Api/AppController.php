<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FcmService;

class AppController extends Controller{

    public function registrar(Request $request){
        \Log::info($request->all());
        // Validar los datos recibidos
        $request->validate([
            'nombre' => 'required|string',
            'edad' => 'required|integer',
            'puntaje' => 'required|numeric',
        ]);

        $persona=\App\Models\Persona::where('nombre',$request->nombre)->first();
        if($persona) {
            return response()->json(['message' => 'ya participo','status'=>false], 200);
        }

        // Crear una nueva instancia de Persona y guardar los datos
        $persona = new \App\Models\Persona([
            'nombre' => $request->input('nombre'),
            'edad' => $request->input('edad'),
            'puntaje' => $request->input('puntaje'),
        ]);

        $persona->save();

        // Responder con un mensaje de éxito
        return response()->json(['message' => 'Datos registrados con éxito','status'=>true], 201);
    }

    public function preguntas(Request $request){
        $amount = $request->input('amount', 10); // Cantidad predeterminada de preguntas si no se especifica
        $category = $request->input('category');
        $difficulty = $request->input('difficulty');
        $type = $request->input('type');

        $query = \App\Models\Question::query();

        if ($category) {
            $query->where('category', $category);
        }

        if ($difficulty) {
            $query->where('difficulty', $difficulty);
        }

        if ($type) {
            $query->where('type', $type);
        }

        $questions = $query->inRandomOrder()->limit($amount)->get();

        $formattedQuestions = [];

        foreach ($questions as $question) {
            $formattedQuestion = [
                'category' => $question->category,
                'type' => $question->type,
                'difficulty' => $question->difficulty,
                'question' => $question->question,
                'correct_answer' => $question->correct_answer,
                'incorrect_answers' => json_decode($question->incorrect_answers),
            ];

            $formattedQuestions[] = $formattedQuestion;
        }
        $response = [
            'response_code' => 0,
            'results' => $formattedQuestions,
        ];


        return response()->json($response);
    }

}
