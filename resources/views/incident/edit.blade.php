@extends('adminlte::page')

@section('title', 'Patient Event Registratie')

@section('content_header')
    <h1>Incident wijzigen</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Incident wijzigen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('incident.index') }}"> Terug</a>
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

    {!! Form::model($incident, ['method' => 'PATCH','route' => ['incident.update', $incident->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Patient:</strong>
                {!! Form::select('patient_id', $patients, null) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event:</strong>
                {!! Form::select('event_id', $events, null) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Klacht:</strong>
                {!! Form::text('complaint') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Soort letsel:</strong>
                {!! Form::select('injury', array('x' => 'Selecteer het soort letsel', 'Hoofdletsel' => 'Hoofdletsel',  'Gezichtsletsel' => 'Gezichtsletsel', 'Oogletsel' => 'Oogletsel', 'Nekletsel' => 'Nekletsel', 'Schouderletsel' => 'Schouderletsel', 'Rugletsel' => 'Rugletsel', 'Borstletsel' => 'Borstletsel', 'Buikletsel' => 'Buikletsel', 'Armen' => 'Armen', 'Handen' => 'Handen', 'Bovenbeen' => 'Bovenbeen', 'Knie' => 'Knie', 'Onderbeen' => 'Onderbeen', 'Enkel' => 'Enkel', 'Voet' => 'Voet', 'Onwel' => 'Onwel', 'Alcohol' => 'Alcohol', 'Drugs' => 'Drugs', 'Suikerspiegel' => 'Suikerspiegel')); !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ABCD stabiel?</strong>
                {!! Form::select('abcd', array('x' => 'Selecteer...', '0' => 'Nee', '1' => 'Ja')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ademhaling bedreigd?</strong>
                {!! Form::select('respiration', array('x' => 'Selecteer...', '0' => 'Nee', '1' => 'Ja')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Beuwstzijn bedreigd (AVPU)?</strong>
                {!! Form::select('avpu', array('x' => 'Selecteer...', 'yes_verbal' => 'Ja - Verbal', 'yes_pain' => 'Ja - Pain', 'yes_unresponsive' => 'Ja - Unresponsive', 'no_alert' => 'No - Alert')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Circulatie bedreigd?</strong>
                {!! Form::select('circulation', array('x' => 'Selecteer...', '0' => 'Nee', '1' => 'Ja')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actieve bloeding?</strong>
                {!! Form::select('active_bleeding', array('x' => 'Selecteer...', '0' => 'Nee', '1' => 'Ja')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fast-test afwijkend?</strong>
                {!! Form::select('variant_fast', array('x' => 'Selecteer...', '0' => 'Nee', '1' => 'Ja')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gebruikt medicatie?</strong>
                {!! Form::select('medicines', array('x' => 'Selecteer...', '0' => 'Nee', '1' => 'Ja')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zo ja, soort en dosering?</strong>
                {!! Form::text('medicines_desc') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Relevante ziektegeschiedenis?</strong>
                {!! Form::select('relevant_diseases', array('x' => 'Selecteer...', '0' => 'Nee', '1' => 'Ja')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zo ja, wat?</strong>
                {!! Form::text('diseases_history') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Wanneer heeft de patiënt voor het laatst gegeten/gedronken?</strong>
                {!! Form::text('last_meal') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Behandeling</strong>
                {!! Form::text('treatment_desc') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genomen actie</strong>
                {!! Form::select('taken_action', array('x' => 'Selecteer...', 'none' => 'Geen actie ondernomen', 'friendsandfamily' => 'Met vrienden/familie mee', 'bycomplaintscallgp' => 'Bij aanhoudende klachten huisarts bellen', 'firstaidorgp' => 'Huisarts/SEH bezoeken', 'ambulance' => 'Overgedragen ambulance', 'deniedtreatment' => 'Patient weigert behandeling/negeert advies')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Patiënt vertrokken / overgedragen om (tijdstip):</strong>
                {!! Form::text('timeleft') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Overige opmerkingen:</strong>
                {!! Form::text('additionalcomments') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam hulpverlener(s):</strong>
                {!! Form::text('namescaregiver') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Evalueren met Team/leidinggevende?</strong>
                {!! Form::select('evaluate_supervisor', array('x' => 'Selecteer...', '0' => 'Nee', '1' => 'Ja')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection