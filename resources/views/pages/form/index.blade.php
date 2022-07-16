@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @if(!$forms->isEmpty())
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
            @else 
                <p>No forms found.</p>
                <p>Create forms using `[POST] /api/v1/forms` </p>
            @endif
        </div>
    </div>
@endsection