@extends('adminlte::page')

@section('title')
    Bewerk {{ $location->city }}
@endsection

@section('content_header')
    <h1>Aanpassen</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Locatie aanpassen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('location.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($location, ['method' => 'PATCH','route' => ['location.update', $location->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Plaats naam:</strong>
                {!! Form::text('city', null, array('placeholder' => 'Plaats naam','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Postcode:</strong>
                {!! Form::text('postcode', null, array('placeholder' => 'Postcode','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Straat naam:</strong>
                {!! Form::text('straat', null, array('placeholder' => 'Straat naam','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nummer:</strong>
                {!! Form::number('nummer', null, array('placeholder' => 'Nummer','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Toevoeging:</strong>
                {!! Form::text('toevoeging', null, array('placeholder' => 'toevoeging','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@stop