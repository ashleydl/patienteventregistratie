@extends('adminlte::page')

@section('title', 'Patient Event Registratie')

@section('content_header')
    <h1>Registratie</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Algemene informatie</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form method="post" enctype="multipart/form-data">
                <div style="margin-left: 2em; margin-right: 2em">
                    <div class="form-group row">
                        <label for="nameEvent" class="col-2 col-form-label">Naam evenement</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul naam evenment in"
                                   id="nameEvent">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dateEvent" class="col-2 col-form-label">Datum evenement</label>
                        <div class="col-10">
                            <input class="form-control" type="date" id="dateEvent">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tijdAanvang" class="col-2 col-form-label">Tijd aanvang hulpv.</label>
                        <div class="col-10">
                            <input class="form-control" type="time" id="tijdAanvang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tijdEinde" class="col-2 col-form-label">Tijd einde hulpv.</label>
                        <div class="col-10">
                            <input class="form-control" type="time" id="tijdEinde">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="select1">Ontstaan patienten contact</label>
                        <select class="form-control" id="select1">
                            <option selected>Maak een keuze</option>
                            <option>patiënt meldde zich bij EHBO post</option>
                            <option>patiënt aangetroffen op evenementen terrein</option>
                            <option>patiënt aangetroffen buiten evenementen terrein</option>
                            <option>patiënten melding via beveiliging evenement</option>
                            <option>patiënten melding via organisatie evenement</option>
                            <option>patiënten melding via bezoekers evenement</option>
                            <option>anders:</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="volgnummer" class="col-2 col-form-label">Volgnummer inzet</label>
                        <div class="col-10">
                            <input class="form-control" type="number" placeholder="vul volgnummer in" id="volgnummer">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nameHulpv" class="col-2 col-form-label">Voor en achternaam hulpverlener</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul naam in"
                                   id="nameHulpv">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="select1">Categorie hulpverlener</label>
                        <select class="form-control" id="select1">
                            <option selected>Maak een keuze</option>
                            <option>eerste hulpverlener</option>
                            <option>verpleegkundige</option>
                            <option>arts</option>
                            <option>stagiair</option>
                            <option>overig:</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="select1">Categorie hulpverlening</label>
                        <select class="form-control" id="select1">
                            <option selected>Maak een keuze</option>
                            <option>Gezondheids verstoring tgv alcohol /drugsgebruik</option>
                            <option>BLS/EHBO zorg</option>
                            <option>ALS zorg(ALS bijlage toevoegen)</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Informatie slachtoffer</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form method="post" enctype="multipart/form-data">
                <div style="margin-left: 2em; margin-right: 2em">
                    <div class="form-group row">
                        <label for="voorletters" class="col-2 col-form-label">Voorletters</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul voorletters in" id="voorletters">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="naamS" class="col-2 col-form-label">Naam</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul naam in" id="naamS">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="straatnaam" class="col-2 col-form-label">Straatnaam</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul straatnaam in" id="straatnaam">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="huisnummer" class="col-2 col-form-label">Huisnummer</label>
                        <div class="col-10">
                            <input class="form-control" type="number" placeholder="Vul huisnummer in" id="huisnummer">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="postcode" class="col-2 col-form-label">Postcode</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul postcode in" id="postcode">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="woonplaats" class="col-2 col-form-label">Woonplaats</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul woonplaats in" id="woonplaats">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="geboortedatum" class="col-2 col-form-label">Geboortedatum</label>
                        <div class="col-10">
                            <input class="form-control" type="date"  id="geboortedatum">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nationaliteit" class="col-2 col-form-label">Nationaliteit</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul nationaliteit in" id="nationaliteit">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="naamH" class="col-2 col-form-label">Naam eigen huisarts</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul eigen huisarts in" id="naamH">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="eigenT" class="col-2 col-form-label">Eigen telefoonnummer</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul eigen telefoonnummer in"
                                   id="eigenT">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefoonnummerC" class="col-2 col-form-label">Telefoonnummer contactpersoon</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Vul telefoonnummer contactpersoon in"
                                   id="telefoonnummerC">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@stop