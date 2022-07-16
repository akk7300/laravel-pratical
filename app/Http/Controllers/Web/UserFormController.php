<?php

namespace App\Http\Controllers\Web;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserFormController extends Controller
{
    public function index(Form $form)
    {
        return view('pages.form.index',with([
            'form' => $form
        ]));
    }

    public function store(Request $request)
    {
        return response()->json(['data' => $request->except('_token')]);
    }
}
