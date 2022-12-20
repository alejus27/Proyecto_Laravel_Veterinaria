@extends('layouts.app')

@section('content')

<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Añadir diagnostico </h2>
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

<form action="{{ route('diagnoses.store', ['id' => request()->id])  }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Signos:</strong>
                <input type="text" name="signs" class="form-control" placeholder="Signos">
            </div>
            <div class="form-group">
                <strong>Sintomas:</strong>
                <input type="text" name="symptoms" class="form-control" placeholder="Sintomas">
            </div>
            <div class="form-group">
                <strong>Hallazgos:</strong>
                <input type="text" name="findings" class="form-control" placeholder="Hallazgos">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection