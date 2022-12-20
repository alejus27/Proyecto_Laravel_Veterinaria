@extends('layouts.app')

@section('content')


<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Editar medicamento</h2>
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

<form method="POST" action="{{ route('medicines.update', $medicine->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Imagen:</strong>
            <div class="form-group">
                <img src="/image/{{ $medicine->image }}" style="border-radius: 20%;" width="150px">
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{ $medicine->name }}" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Precio:</strong>
                <input type="text" name="sex" value="{{ $medicine->price }}" class="form-control" placeholder="Precio">
            </div>


        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>

</form>


@endsection