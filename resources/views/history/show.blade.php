@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Información historia clinica</h2>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Motivo consulta: </strong>
            {{ $history->reason_consultation}}
        </div>


    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Vacunación: </strong>
            {{ $history->vaccination}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Esterilizado: </strong>
            {{ $history->sterilized}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Peso: </strong>
            {{ $history->weight}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Pulso: </strong>
            {{ $history->pulse}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Desparasitación: </strong>
            {{ $history->deworming}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Antecedentes: </strong>
            {{ $history->antecedents}}
        </div>
    </div>



</div>
@endsection