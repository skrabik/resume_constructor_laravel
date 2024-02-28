<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Blade;

class TemplateViewController extends Controller
{
    public function render ()
    {
        return view('resume_templates/first', $_POST);
    }
    public function downloadPDF (Request $request)
    {
        $response = view('resume_templates/download/first', $_POST);
//        echo $response;
        $dompdf = new Dompdf();
        $dompdf->loadHtml($response);
        $dompdf->render();
        $dompdf->stream();
    }
}
