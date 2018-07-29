@extends('adminlte::page')

@section('title', 'Patient Event Registratie')



@section('content_header')

@stop
{{ Html::style('css/indexhome.css') }}


@section('content')
    <div class="container">
        <div class="col-sm-4">
            <a href={{ action('LpaController@index') }}>{{ Html::image('img/spuit.jpg', 'text', array( 'width' => 200, 'height' => 200, 'alt' => "link naar LPA-pagina" )) }}
                <h3>LPA</h3>
                <p> Kies hier je categorie</p></a>
        </div>
        <div class="col-sm-4">
            <a href={{ action('EventController@index') }}>{{ Html::image('img/pleister.jpg', 'text', array( 'width' => 200, 'height' => 200 )) }}
                <h3>Registratie</h3>
                <p> Klik hier om te registreren</p>
        </div>
        <div class="col-sm-4">
            <a href={{ action('UserController@index') }}>{{ Html::image('img/profiel.jpg', 'text', array( 'width' => 200, 'height' => 200 )) }}
                <h3>Profielinstellingen</h3>
                <p> Verander hier instellingen over jezelf</p>
        </div>
    </div>
    </div>

@stop
