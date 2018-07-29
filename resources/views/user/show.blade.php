@extends('adminlte::page')

@section('title', 'Patient Event Registratie')


@section('content_header')
    <h1>Patient Event Registratie</h1>
@stop

@section('content')
    @php
        $google2fa_url = Google2FA::getQRCodeGoogleUrl(
            'Patient Event Registratie',
            $user->email,
            $user->google2fa_secret
        );
    @endphp

    {{ Html::image($google2fa_url) }}

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Gebruiker</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                {{ $user->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {{ $user->email }}
            </div>
        </div>

    </div>
@endsection