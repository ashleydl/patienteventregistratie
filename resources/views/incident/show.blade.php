@extends('adminlte::page')

@section('title', 'Patient Event Registratie')


@section('content_header')
    <h1>Patient Event Registratie</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Bekijk incident</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('incident.index') }}"> Back</a>
                {!! Form::open(['method' => 'DELETE','route' => ['incident.destroy', $incident->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Patientaam:</strong>
                {{ $incident->patient->name . ', ' . $incident->patient->surname }} <br>
                <strong>Evenementenaam:</strong>
                {{ $incident->event->name }}<br>
                <strong>Klacht:</strong>
                {{ $incident->complaint }}<br>
                <strong>ABCD:</strong>
                {{ $incident->abcd }}<br>
                <strong>Respiration:</strong>
                {{ $incident->respiration }}<br>
                <strong>AVPU:</strong>
                {{ $incident->avpu }}<br>
                <strong>Circulation:</strong>
                {{ $incident->circulation }}<br>
                <strong>Active bleeding:</strong>
                {{ $incident->active_bleeding }}<br>
                <strong>FAST-test afwijkend:</strong>
                {{ $incident->variant_fast }}<br>
                <strong>Gebruikt medicijnen:</strong>
                {{ $incident->medicines }}<br>
                <strong>Medicijnenomschrijving:</strong>
                {{ $incident->medicines_desc }}<br>
                <strong>Relevante ziektes:</strong>
                {{ $incident->relevant_diseases }}<br>
                <strong>Ziektehistorie:</strong>
                {{ $incident->diseases_history }}<br>
                <strong>Laatste maaltijd:</strong>
                {{ $incident->last_meal }}<br>
                <strong>Behandeling:</strong>
                {{ $incident->treatment_desc }}<br>
                <strong>Genomen actie:</strong>
                {{ $incident->taken_action }}<br>
                <strong>Tijd patient is weggegaan:</strong>
                {{ $incident->timeleft }}<br>
                <strong>Overige opmerkingen:</strong>
                {{ $incident->additionalcomments }}<br>
                <strong>Naam hulpverlener(s):</strong>
                {{ $incident->namescaregiver }}<br>
                <strong>Evalueren leidinggevende:</strong>
                {{ $incident->evaluate_supervisor }}<br>

            </div>
        </div>
    </div>
@endsection