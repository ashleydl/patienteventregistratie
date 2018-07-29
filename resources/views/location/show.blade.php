@extends('adminlte::page')

@section('title', 'Patient Event Registratie')


@section('content_header')
    <h1>Patient Event Registratie</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Bekijk locatie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('location.index') }}"> Back</a>
                {!! Form::open(['method' => 'DELETE','route' => ['location.destroy', $location->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                {{ $location->city }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Postcode:</strong>
                {{ $location->postcode }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Straat naam:</strong>
                {{ $location->straat }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nummer (+toevoeging):</strong>
                {{ $location->nummer }} {{ $location->toevoeging }}
            </div>
        </div>
    </div>
@endsection