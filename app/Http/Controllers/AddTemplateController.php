<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateModel;

class AddTemplateController extends Controller
{
    public function add ()
    {
        $first_template = [
            'image_url' => "/resources/static/images/template1.jpg",
            'description' => 'первый шаблон',
            'template_url' => "resume_templates.first"
        ];
        TemplateModel::create($first_template);
        $element = TemplateModel::all();
        dd($element);
    }
}
