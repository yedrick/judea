<?php

namespace App\Http\Controllers;

use App\Helpers\Func;
use App\Models\Group;
use App\Models\Point;
use App\Models\Qr;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class QrUserController extends Controller
{
    protected $request;
    protected $url;
    protected $prev;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UrlGenerator $url)
    {

        $this->middleware('auth', ['except' => ['register', 'registerPost']]);
        $this->prev = $url->previous();
    }

    public function indexGroup()
    {
        $groups = Group::get();
        return view('qr.indexGroup', ['groups' => $groups]);
    }

    public function createGroup()
    {
        return view('qr.createGroup');
    }

    public function storeGroup(Request $request)
    {
        $group = new Group();
        $group->name = $request->name;
        $group->save();
        return redirect($this->prev)->with('message_success', 'Grupo creado');
    }

    public function editGroup($id)
    {
        $group = Group::find($id);
        return view('qr.editGroup', ['group' => $group]);
    }

    public function updateGroup(Request $request, $id)
    {
        $group = Group::find($id);
        $group->name = $request->name;
        $group->save();
        return redirect($this->prev)->with('message_success', 'Grupo actualizado');
    }

    // eliminar grupos
    public function destroyGroup($id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect($this->prev)->with('message_success', 'Grupo eliminado');
    }

    // crear, editar ,eliminar las preguntas

    public function indexQuestion()
    {
        $questions = Question::get();
        return view('qr.indexQuestion', ['questions' => $questions]);
    }

    public function createQuestion()
    {
        return view('qr.createQuestion');
    }

    public function storeQuestion(Request $request)
    {
        \Log::info('storeQuestion');
        \Log::info($request->all());
        // validamos q no nos envien datos vacios
        if ($request->question == '' || $request->correct_answer == '' || $request->points == '' || $request->options == '') {
            return redirect($this->prev)->with('message_error', 'Datos vacios');
        }
        $optiones = json_decode($request->incorrect_answers);
        if ($request->options == 'multiple' &&  count($optiones) == 0) {
            return redirect($this->prev)->with('message_error', 'Datos vacios en incorectas');
        }
        $question = new Question();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $directoryPath = public_path('images');
            if (!is_dir($directoryPath)) {
                mkdir($directoryPath, 0755, true);
            }
            $file->move($directoryPath, $filename);
            $question->image = 'images/' . $filename;
        }
        $question->code = Func::generateCode(10);
        $question->question = $request->question;
        $question->correct_answer = $request->correct_answer;
        $question->points = $request->points;
        $question->type = $request->options;
        // verificamos si tienen datos el incorrect_answers  comvertimos en json y guardamos
        if ($request->has('incorrect_answers') && $request->options == 'multiple' &&  count($optiones) > 0) {
            $question->incorrect_answers = json_encode($optiones);
        }
        if ($request->has('status')) {
            $question->status = $request->status;
        }
        if ($request->has('active')) {
            $question->active = $request->active;
        }
        $question->save();
        return redirect($this->prev)->with('message_success', 'Pregunta creada');
    }

    // eliminamos la pregunta
    public function destroyQuestion($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect($this->prev)->with('message_success', 'Pregunta eliminada');
    }

    // ver pregunta
    public function showQuestion($id)
    {
        $question = Question::find($id);
        $type = $question->type;
        \Log::info('showQuestion');
        \Log::info($type);
        if ($type == 'multiple') {
            $incorrect = json_decode($question->incorrect_answers);
            $incorrect[] = $question->correct_answer;
            shuffle($incorrect);
            $optiones = $incorrect;
            shuffle($optiones);

            return view('question.multiple', ['question' => $question, 'optiones' => $optiones]);
        } elseif ($type == 'abierta') {
            return view('question.abierta', ['question' => $question]);
        } elseif ($type == 'imagen') {
            return view('question.imagen', ['question' => $question]);
        } else {
            return view('incorrect');
        }
    }

    // mostra pregunta con el codigo
    public function showQuestionQr($code)
    {
        // verificar si el usuario esta logeado
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        if ($code == '') {
            return view('incorrect');
        }
        $question = Question::where('code', $code)->first();
        if (!$question) {
            return view('incorrect');
        }
        $type = $question->type;
        if ($type == 'multiple') {
            $incorrect = json_decode($question->incorrect_answers);
            $incorrect[] = $question->correct_answer;
            shuffle($incorrect);
            $optiones = $incorrect;
            shuffle($optiones);
            return view('question.multiple', ['question' => $question, 'optiones' => $optiones]);
        } elseif ($type == 'abierta') {
            return view('question.abierta', ['question' => $question]);
        } elseif ($type == 'imagen') {
            return view('question.imagen', ['question' => $question]);
        } else {
            return view('incorrect');
        }
    }

    // verificar la pregunta correcta y almacenar en la base de datos un pts al user
    public function answerQuestion(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        if ($request->answer == '') {
            \Log::info('no existe respuesta');
            return view('incorrect');
        }
        if ($request->code == '') {
            \Log::info('no existe codigo');
            return view('incorrect');
        }
        $user = auth()->user();
        $question = Question::where('code', $request->code)->first();
        if (!$question) {
            \Log::info('no existe pregunta');
            return view('incorrect');
        }
        if ($question->correct_answer == $request->answer) {

            $user = auth()->user();
            $user->pts = $user->pts + $question->points;
            $user->save();
            $points = new Point();
            $points->quantity = $question->points;
            $points->group_id = $user->group_id;
            $points->save();
            return view('correct2');
        } else {
            \Log::info('respuesta incorrecta');
            return view('incorrect');
        }
    }

    public function generateQrs()
    {
        $questions = Qr::get();
        $pdf = Pdf::loadView('pdf.qr_codes', ['questions' => $questions]);
        return $pdf->stream('invoice.pdf');
    }

    public function generateQuestionQrs()
    {
        $questions = Question::get();
        $pdf = Pdf::loadView('pdf.qr_codes', ['questions' => $questions]);
        return $pdf->stream('invoice.pdf');
    }

    public function register()
    {
        $grupos = Group::get();
        return view('register_user', ['grupos' => $grupos]);
    }

    //registro de usuario participante  q lelga todo sus datos
    public function registerPost(Request $request)
    {
        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'group_id' => 'required|numeric',
        ]);

        // Si la validación falla, redirigir de vuelta con errores
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Crear un nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(12345678),
            'group_id' => $request->group_id,
            'role_id' => 2,
        ]);

        // Iniciar sesión automáticamente después del registro
        Auth::login($user);

        // Redirigir a la ruta deseada
        return redirect('/home'); // Cambia esto a la ruta deseada
    }

    // mostrar los usuarios y sus puntos
    public function showUsers()
    {
        $users = User::where('role_id', 2)->get();
        return view('participan.index', ['users' => $users]);
    }

    // mostrar los puntos de los grupos de la tabla points pero sumando los puntos registrados
    public function showPoints()
    {
        $points = Point::select('grupo_id', DB::raw('SUM(pts) as total_pts'))
            ->groupBy('grupo_id')
            ->get();
        return view('qr.showPoints', ['points' => $points]);
    }
}
