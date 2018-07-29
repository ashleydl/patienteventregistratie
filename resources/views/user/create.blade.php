@extends('adminlte::page')

@section('title', 'Patient Event Registratie')

@section('content_header')
    <h1>Aanmaken</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Maak een nieuwe gebruiker</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Terug</a>
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

    {!! Form::open(array('route' => 'user.store','method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Naam','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {!! Form::text('email', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!}
            </div>
        </div>
        
        <div class="form-group has-feedback col-xs-12 col-sm-12 col-md-12 {{ $errors->has('password') ? 'has-error' : '' }}">
            <div class="form-group">
                <strong>Wachtwoord:</strong>
            <input type="password" name="password" class="form-control"
                   placeholder="{{ trans('adminlte::adminlte.password') }}">
            <span class="form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
            @endif
            </div>
        </div>
        <div class="form-group has-feedback col-xs-12 col-sm-12 col-md-12 {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            <input type="password" name="password_confirmation" class="form-control"
                   placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
            <span class="form-control-feedback"></span>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
            @endif
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection