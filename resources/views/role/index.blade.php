@extends('adminlte::page')

@section('title', 'Patient event registratie')


@section('content_header')
    <h1>Rollen</h1>
@stop



@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rollen CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('role.create') }}"> Maak nieuwe rol</a>
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
            <th width="500px">Action</th>
        </tr>
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('role.show', $role->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('role.edit', $role->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id],'style'=>'display:inline']) !!}
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