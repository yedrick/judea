<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Maatwebsite\Excel\Facades\Excel;
use App\Helpers\Func;
// use Excel;

class ProcessController extends Controller
{
    protected $request;
	protected $url;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UrlGenerator $url)
    {
        $this->middleware('auth');
        $this->prev = $url->previous();
        $this->module = 'process';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function uploadExcel(Request $request){
        $file = $request->file('excel_file');

        // Validar que se haya enviado un archivo
        if ($file == null) {
            return redirect()->back()->with('error', 'Por favor, selecciona un archivo Excel válido.');
        }
        $user=auth()->user();
        // Procesar el archivo Excel
         // Cargar el archivo Excel y obtener los datos por columnas
        // Obtener datos del archivo Excel
        $data = Excel::toArray([], $file);

        // Obtener los datos por columnas
        foreach ($data as $kay=>$row) {
            if($row[0]!=null ){
                foreach ($row as $key => $col) {
                    \Log::info($col[0]);
                    if($col[0]!=null){
                        $gruop=\App\Models\Group::where('name','like','%'.$col[6].'%')->first();
                        $ministr=\App\Models\Ministry::where('name','like','%'.$col[2].'%')->first();
                        $campa=new \App\Models\Campament();
                        $campa->name=$col[1];
                        $campa->age=$col[3];
                        $campa->phone=$col[4];
                        $campa->gender=$col[5];
                        $campa->image=$col[7].'.jpg';
                        if($col[8]==0){
                            $campa->status='closed';
                        }
                        // $campa->status=$col[0];
                        if($ministr){
                            $campa->ministry_id=$ministr->id;
                        }
                        if($gruop){
                            $campa->group_id=$gruop->id;
                        }
                        $campa->capacity=0;
                        $campa->save();
                        $user=Func::createUser($gruop,$campa);
                        \Log::info($user);
                    }

                }
            }

        }
    }

    public function vote($campa_id) {
        $user=auth()->user();
        if($user->campamento_id==$campa_id){
            return redirect($this->prev)->with('message_error','No autorizado');
        }
        $campamentista=\App\Models\Campament::find($user->campamenti_id);
        // dd($campamentista);
        // exit();
        if($campamentista->capacity==2){
            return redirect('free')->with('message_error','No autorizado');
        }
        $vote=new \App\Models\Vote();
        $vote->campamenti_id=$campa_id;
        $vote->vote=1;
        $vote->save();
        $campamentista->capacity+=1;
        $campamentista->save();
        if($campamentista->capacity==1){
            return redirect('/female');
        }

    }
}
