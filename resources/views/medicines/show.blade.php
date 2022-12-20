@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-left">
            <h2>Información mascota</h2>
        </div>

    </div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <img src="/image/{{ $pet->image }}" style="border-radius: 20%;" width="200px">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $medicine->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Precio:</strong>
            {{ $medicine->price}}
        </div>
    </div>

   
</div>
@endsection