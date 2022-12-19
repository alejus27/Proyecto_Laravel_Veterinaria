@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-left">
            <h2>Información historia clinica</h2>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Motivo:</strong>
            {{ $clinicalHistory->id_pet}}
        </div>

        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
            <strong>Specie:</strong>
            {{ $clinicalHistory->vaccination}}
         
        </div>
    </div>
   
</div>
@endsection