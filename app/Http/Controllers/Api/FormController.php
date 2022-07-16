<?php

namespace App\Http\Controllers\Api;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FormResource;
use App\Http\Requests\FormStoreRequest;

class FormController extends Controller
{
    public function index()
    {
        $form = Form::with('fields')->get();
        return FormResource::collection($form);
    }

    public function show(Form $form)
    {
        return new FormResource($form);
    }

    public function store(FormStoreRequest $request)
    {
        $form = Form::create($request->all());
        
        return response()->json([
            'status' => '200',
            'data' => $form,
            'messsage' => 'Form Created Successfully'
        ]);
    }
}
