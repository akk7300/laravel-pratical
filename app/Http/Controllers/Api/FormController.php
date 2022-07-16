<?php

namespace App\Http\Controllers\Api;

use App\Models\Form;
use App\Models\Field;
use App\Events\FormCreated;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FormResource;
use App\Http\Resources\FieldResource;
use App\Http\Requests\AddFieldRequest;
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

        event(new FormCreated($form));

        return response()->json([
            'status' => 200,
            'data' => new FormResource($form),
            'messsage' => 'Form Created Successfully'
        ],200);
    }

    public function addFields(AddFieldRequest $request)
    {
        $form = Form::where('uuid',$request->form_uuid)->firstOrFail();

        $field = Field::create([
            'form_id' => $form->id,
            'field_name' => $request->name,
            'field_value' => json_encode($request->value),
            'field_type' => $request->type,
        ]);

        return response()->json([
            'status' => 200,
            'data' => new FieldResource($field),
            'messsage' => 'Field Added Successfully'
        ],200);
    }
}
