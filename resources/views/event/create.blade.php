@extends('adminlte::page')

@section('title', 'Patient Event Registratie')

@section('content_header')
    <h4><div class="col-sm-4">
            <a href={{ action('LpaController@index') }}>
                << ga terug
                </a>
        </div></h4>
@stop

@section('content')
    <html lang="eng">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="col-10">

            <h2>Evenement aanmaken</h2>
        </div>
    </div>
    @if (count($errors) > 0)
               <div class="alert alert-danger">
                   <strong>Whoops!</strong> Er zijn problemen met uw input.<br><br>
                   <ul>
                       @foreach($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                           </ul>
               </div>
            @endif


        {!! Form::open(array('route' => 'event.store','method'=>'POST')) !!}

    <div class="box-body">
        <form method="post" enctype="multipart/form-data">
            <div style="margin-left: 2em; margin-right: 2em">


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <div class="col-10">
                            <div lang="ne">
                            {!! Form::label('name_event', 'Naam evenement', ['class' => 'control-label']) !!}
                            {!! Form::text('name_event', null, ['class' => 'form-control', 'placeholder' => 'vul naam in']) !!}
                        </div>
                    </div>
                </div></div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <div class="col-10">
                        {!! Form::label('date_event', 'Datum', ['class' => 'control-label']) !!}
                        {!! Form::date('date_event', \Carbon\Carbon::now()->format('d/m/Y'),
['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                </div

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <div class="col-10">
                            {!! Form::label('location_event', 'Locatie', ['class' => 'control-label']) !!}
                            {!! Form::text('location_event', null, ['class' => 'form-control', 'placeholder' => 'vul locatie in']) !!}
                    </div>
                </div>
                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                          <button type="submit" class="btn btn-primary">Verzenden</button>
            </div>
    </div>
    {!! Form::close() !!}



@stop