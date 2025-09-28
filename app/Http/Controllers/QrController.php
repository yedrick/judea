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

class QrController extends Controller {
    protected $request;
	protected $url;
    protected $prev;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UrlGenerator $url) {

        $this->middleware('auth', ['except' => ['register', 'registerPost']]);
        $this->prev = $url->previous();
    }

    public function index() {
        $qrs = Qr::get();
        return view('qrs.index', ['qrs' => $qrs]);
    }

    public function create() {
        return view('qrs.create');
    }

    public function store(Request $request) {
        $qr = new Qr();
        $qr->code = $request->code;
        $qr->active = $request->active;
        $qr->pts = $request->pts;
        $qr->save();
        return redirect()->route('qr')->with('message_success','Qr creado');
    }

    public function edit($id) {
        $qr = Qr::find($id);
        return view('qrs.edit', ['qr' => $qr]);
    }

    public function update(Request $request, $id) {
        $qr = Qr::find($id);
        $qr->code = $request->code;
        $qr->active = $request->active;
        $qr->pts = $request->pts;
        $qr->save();
        return redirect()->route('qr')->with('message_success','Qr actualizado');
    }

    public function destroy($id) {
        $qr = Qr::find($id);
        $qr->delete();
        return redirect()->route('qr')->with('message_success','Qr eliminado');
    }

}
