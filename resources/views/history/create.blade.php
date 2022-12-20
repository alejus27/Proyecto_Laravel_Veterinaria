@extends('layouts.app')

@section('content')

<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Añadir historia clinica</h2>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('history.store' , ['id' => request()->id]) }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Motivo consulta:</strong>
                <input type="text" name="reason_consultation" class="form-control" placeholder="Motivo consulta">
            </div>
            <div class="form-group">
                <strong>Vacunación:</strong>
                <input type="text" name="vaccination" class="form-control" placeholder="Estado vacunación">
            </div>
            <div class="form-group">
                <strong>Esterilizado:</strong>
                <input type="text" name="sterilized" class="form-control" placeholder="Estado esterilizado">
            </div>
            <div class="form-group">
                <strong>Peso:</strong>
                <input type="text" name="weight" class="form-control" placeholder="Peso">
            </div>
            <div class="form-group">
                <strong>Pulso:</strong>
                <input type="text" name="pulse" class="form-control" placeholder="Pulso">
            </div>
            <div class="form-group">
                <strong>Desparasitación:</strong>
                <input type="text" name="deworming" class="form-control" placeholder="Estadp desparacitación">
            </div>
            <div class="form-group">
                <strong>Antecedentes:</strong>
                <input type="text" name="antecedents" class="form-control" placeholder="Antecedentes">
            </div>


        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection