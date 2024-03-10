<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Blade;
use App\Models\TemplateModel;

class TemplateViewController extends Controller
{
    public function render ()
    {
        $template = TemplateModel::find($_POST['template_id']);
        return view($template->template_url, $_POST);
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
