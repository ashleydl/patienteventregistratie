@extends('adminlte::page')

@section('title', 'Patient event registratie')


@section('content_header')
    <h1>Incidenten</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Incidenten CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('incident.create') }}"> Maak nieuw incident</a>
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
            <th>Patientnaam</th>
            <th width="500px">Action</th>
        </tr>
        @foreach ($incidents as $incident)
            <tr>
                <td>{{ $incident->id }}</td>
                <td>{{ $incident->patient->name . ', ' . $incident->patient->surname }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('incident.show', $incident->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('incident.edit', $incident->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['incident.destroy', $incident->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function($) {
            $(".row-link").click(function() {
                window.document.location = $(this).data("href");
            });
            $('#cohort-tabs a:first').tab('show'); // Select first tab
        });
    </script>
@stop