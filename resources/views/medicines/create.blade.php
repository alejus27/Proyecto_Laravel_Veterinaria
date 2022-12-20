@extends('layouts.app')

@section('content')

<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Añadir nuevo medicamento</h2>
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

<form action="{{ route('medicines.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <strong>Precio:</strong>
                <input type="text" name="price" class="form-control" placeholder="Precio">
            </div>
            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>

           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection