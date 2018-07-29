@extends('adminlte::page')

@section('title', 'Patient Event Registratie')

@section('content_header')
    <h1>LPA</h1>
@stop

@section('content')
    <p>Kies uw categorie</p>

    <div class="btn-group-vertical">
    <button href="airway" type="button" class="btn btn-primary"><a href="airway">Airway</a></button> <br>
    <button type="button" class="btn btn-primary"><a href="breathing">Breathing</a></button> <br>
    <button type="button" class="btn btn-primary"><a href="circulation">Circulation</a></button> <br>
    <button type="button" class="btn btn-primary"><a href="disability">Disability</a></button>
    </div>


@stop
