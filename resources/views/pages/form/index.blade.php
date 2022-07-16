@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1>Explore forms</h1>
            @foreach($forms as $form)
            <div class="col-md-4">
                <div class="card card-body mt-5">
                    <a href="/forms/{{$form->uuid}}">
                        {{ $form->form_name }} ( {{ $form->created_at->format('Y-m-d H:i')}} )
                    </a>
                    <small>created_at 
                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($form->created_at))->diffForHumans() }}
                    </small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection