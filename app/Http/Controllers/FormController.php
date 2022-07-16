<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Resources\FormResource;

class FormController extends Controller
{
    public function show(Form $form)
    {
        return new FormResource($form);
    }
}
