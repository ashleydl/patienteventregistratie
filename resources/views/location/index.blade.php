@extends('adminlte::page')

@section('title', 'Patient event registratie')


@section('content_header')
    <h1>Locaties</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Locaties CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('location.create') }}"> Maak nieuwe locatie</a>
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
            <th>Naam plaats</th>
            <th>Postcode</th>
            <th>Straat naam</th>
            <th>Nummer (+toevoeging)</th>
            <th width="500px">Action</th>
        </tr>
        @foreach ($locations as $location)
            <tr>
                <td>{{ $location->id }}</td>
                <td>{{ $location->city }}</td>
                <td>{{ $location->postcode }}</td>
                <td>{{ $location->straat }}</td>
                <td>{{ $location->nummer }} {{ $location->toevoeging }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('location.show', $location->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('location.edit', $location->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['location.destroy', $location->id],'style'=>'display:inline']) !!}
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