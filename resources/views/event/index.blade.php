@extends('adminlte::page')



@section('content_header')
    <h1>Beheer > Evenementbeheer</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Evenementbeheer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('event.create') }}"> Maak nieuw evenement</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Datum</th>
            <th>Locatie</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($events as $key => $event)
            <tr>
                <td>{{ $event->id }}</td>
                              <td>{{ $event->name }}</td>
                                <td>{{ $event->date }}</td>
                               <td>{{ $event->location }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('event.show', $event->id) }}">bekijken</a>
                    <a class="btn btn-primary" href="{{ route('event.edit', $event->id) }}">bewerken</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['event.destroy', $event->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('verwijderen', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {!! $events->render() !!}

@endsection