@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                <h1>{{ $form->form_name }}</h1>

                <form method="POST" action="/forms">

                    @csrf
                    @foreach($form->fields as $field)

                        @if($field->field_type == 'input')
                            <x-formInput label="{{ $field->field_name }}" />
                        @endif
                        
                        @if($field->field_type == 'select')
                            <x-formSelect 
                                        label="{{ $field->field_name }}" 
                                        :value="json_decode($field->field_value,true)"
                            />
                        @endif
                        @if($field->field_type == 'radio')
                            <x-formRadio 
                                        label="{{ $field->field_name }}" 
                                        :value="json_decode($field->field_value,true)"
                            />
                        @endif

                        @if($field->field_type == 'textarea')
                            <x-formTextarea label="{{ $field->field_name }}" 
                        />
                        @endif

                        @if($field->field_type == 'checkbox')
                            <x-formCheckbox label="{{ $field->field_name }}" 
                        />
                        @endif
                        
                    @endforeach
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
