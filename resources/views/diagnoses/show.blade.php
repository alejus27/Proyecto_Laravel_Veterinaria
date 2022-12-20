@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-left">
            <h2>Reporte diagnostico</h2>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Signos:</strong>
            {{ $diagnoses->signs }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sintomas:</strong>
            {{ $diagnoses->symptoms}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Hallazgos:</strong>
            {{ $diagnoses->findings}}
        </div>
    </div>

   
</div>
@endsection