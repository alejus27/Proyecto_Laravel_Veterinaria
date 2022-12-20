@extends('layouts.app')

@section('content')

<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Añadir detalles </h2>
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

<form action="{{ route('medicine_detail.store', ['id' => request()->id])  }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                <input type="text" name="category" class="form-control" placeholder="Categoria">
            </div>
            <div class="form-group">
                <strong>Descripción:</strong>
                <input type="text" name="description" class="form-control" placeholder="Descripción">
            </div>
            <div class="form-group">
                <strong>Fecha de expiración:</strong>
                <input type="text" name="expiration_date" class="form-control" placeholder="Fecha de expiración">
            </div>
           
           


        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection