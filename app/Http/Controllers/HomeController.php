<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
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
        $this->middleware('auth');
        $this->prev = $url->previous();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    public function result(){
        $user=auth()->user();
        if($user->id=1){
            $views=\App\Models\View::get();
            $groups=\App\Models\Group::get();
            return view('result',['user'=>$user->id, 'groups'=>$groups,]);
        }
    }


    public function generateQr() {
        $products=\App\Models\Product::get();
        $products=\App\Models\Product::get();
        foreach ($products as $item){
            $qrCode = QrCode::size(300)->generate(url('product/'.$item->code));
            $folderPath = 'qr_codes'; // Carpeta de destino para guardar los códigos QR
            $fileName = 'Qr_'.$item->id . '.png'; // Nombre del archivo PNG

            // Guardar el código QR como archivo PNG en la carpeta de destino
            Storage::disk('public')->put('qr_code'.'/'. $fileName, $qrCode);

        }
        // return view('qr',['products' =>$products]);
    }
    public function generateQrs() {
        $qrCodesPerPage = 4;

        // Generar la cantidad de códigos QR necesarios
        $qrCodes = [];
        $products=\App\Models\Product::get();
        foreach ($products as $key => $item) {
            $url=url('product/'.$item->code);
            \Log::info($url);
            $qrCodes[] = QrCode::size(200)->generate(url('product/'.$item->code));
        }
        // for ($i = 0; $i < $qrCodesPerPage; $i++) {

        // }
        \Log::info($qrCodes);
        $pdf = \PDF::loadView('pdf.qr_codes', ['qrCodes'=>$qrCodes,'products'=>$products]);
        return $pdf->stream('qr.pdf');
        // Obtener la vista con los códigos QR
        // $view = view('pdf.qr_codes', compact('qrCodes'));

        // // Crear una instancia de Dompdf y cargar la vista
        // $options = new Options();
        // $options->set('defaultFont', 'Arial');
        // $dompdf = new Dompdf($options);
        // $dompdf->loadHtml($view->render());

        // // Renderizar el PDF
        // $dompdf->setPaper('letter', 'portrait');
        // $dompdf->render();

        // // Devolver el PDF como una respuesta descargable
        // return $dompdf->stream('qr_codes.pdf');

    }


    public function incorrect(){
        return view('incorrect');
    }

    public function correct() {
        return view('correct');
    }

    public function search($code){
        if($code===null){
            return redirect($this->prev)->with('message_error','No se encontró el code');
        }
        if (!auth()->check()) {
            return redirect($this->prev)->with('message_error','No autorizado');
        }
        $user=auth()->user();
        $product=\App\Models\Product::where('code',$code)->where('group_id',$user->group_id)->first();
        if($product){
            if($product->status!='pending'){
                $view= new \App\Models\View();
                $view->group_id=$user->group_id;
                $view->product_id=$product->id;
                $view->see=false;
                $view->incorrect=1;
                $view->points=-1;
                $view->save();
                return redirect('incorrect')->with('message_error','No autorizado');
            }
            $product->status='read';
            $product->save();
            $view= new \App\Models\View();
            $view->group_id=$user->group_id;
            $view->product_id=$product->id;
            $view->see=true;
            $view->points=5;
            $view->save();
            return redirect('correct')->with('message_error','+1');
        }else{
            $product=\App\Models\Product::where('code',$code)->first();
            if($product){
                $view= new \App\Models\View();
                $view->group_id=$user->group_id;
                $view->product_id=$product->id;
                $view->see=false;
                $view->incorrect=1;
                $view->points=-1;
                $view->save();
                return redirect('incorrect')->with('message_error','No autorizado');
            }
            return redirect('incorrect')->with('message_error','No autorizado');
        }
    }
}
