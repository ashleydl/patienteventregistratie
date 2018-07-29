@extends('adminlte::page')

@section('title', 'Patient Event Registratie')


@section('content_header')
    <h1>Patient Event Registratie</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Bekijk rol</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('role.index') }}"> Back</a>
                {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                {{ $role->name }}
            </div>
        </div>
    </div>
@endsection