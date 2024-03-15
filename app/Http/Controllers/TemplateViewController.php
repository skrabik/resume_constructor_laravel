<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Models\TemplateModel;
use Dompdf\Dompdf;
use Dompdf\Options;


class TemplateViewController extends Controller
{
    public function render ()
    {
        $template = TemplateModel::find($_POST['template_id']);
        return view($template->template_url, $_POST);
    }
    public function downloadPDF (Request $request)
    {
        $template = TemplateModel::find($_POST['template_id']);
        $response = view($template->download_url, $_POST);
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($response);
        $dompdf->setPaper('A4');
        $dompdf->render();
        $dompdf->stream();
    }
}
