@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-left">
            <h2>Detalles medicamento</h2>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category:</strong>
            {{ $medicine_detail->category }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripción:</strong>
            {{ $medicine_detail->description}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fecha de expiración:</strong>
            {{ $medicine_detail->expiration_date}}
        </div>
    </div>

   
</div>
@endsection