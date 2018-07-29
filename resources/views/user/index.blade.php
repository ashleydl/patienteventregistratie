@extends('adminlte::page')

@section('title', 'Patient event registratie')


@section('content_header')
    <h1>Gebruikers</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gebruikers CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Maak nieuwe gebruiker</a>
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
            <th>Nummer</th>
            <th>Naam</th>
            <th>E-mail</th>
            <th>Wachtwoord</th>
            <th width="500px">Action</th>
        </tr>
    @foreach ($users as $key => $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>SUPERGEHEIM WACHTWOORD</td>
            <td>
                <a class="btn btn-info" href="{{ route('user.show', $user->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline']) !!}
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
            $('#cohort-tabs a:first').tab('show') // Select first tab
        });
    </script>
@stop