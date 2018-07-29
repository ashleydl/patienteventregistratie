@extends('adminlte::page')

@section('title', 'Patient Event Registratie')

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Evenement wijzigen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('event.index') }}"> Terug</a>
            </div>
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

    {!! Form::model($event, ['method' => 'PATCH','route' => ['event.update', $event->id]]) !!}
    <div class="row">

    <div class="box-body">
        <form method="post" enctype="multipart/form-data">
            <div style="margin-left: 2em; margin-right: 2em">


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <div class="col-10">
                            {!! Form::label('namen', 'Naam evenement', ['class' => 'control-label']) !!}
                            {!! Form::text('namen', null, ['class' => 'form-control', 'placeholder' => 'vul naam in']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <div class="col-10">
                            {!! Form::label('datum_patient', 'Datum', ['class' => 'control-label']) !!}
                            {!! Form::date('date', \Carbon\Carbon::now()->format('d/m/Y'),
    ['class' => 'form-control', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <div class="col-10">
                            {!! Form::label('time_in', 'Locatie', ['class' => 'control-label']) !!}
                            {!! Form::text('time_in', null, ['class' => 'form-control', 'placeholder' => 'vul locatie in']) !!}
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