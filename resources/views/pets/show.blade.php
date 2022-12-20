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
            <img src="/image/{{ $pet->image }}" style="border-radius: 20%; border-style:inset" width="200px">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $pet->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sexo:</strong>
            {{ $pet->sex}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Edad:</strong>
            {{ $pet->age}}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Especie:</strong>
            {{ $pet->specie}}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>Raza:</strong>
            {{ $pet->breed}}
        </div>
    </div>

</div>
@endsection