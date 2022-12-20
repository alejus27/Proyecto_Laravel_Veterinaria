@extends('layouts.app')

@section('content')



<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Editar mascota</h2>
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

<form action="{{ route('pets.update',$pet->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Imagen:</strong>
            <div class="form-group">
                <img src="/image/{{ $pet->image }}" style="border-radius: 20%;" width="150px">
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $pet->name }}" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Sexo:</strong>
                <input type="text" name="sex" value="{{ $pet->sex }}" class="form-control" placeholder="Sexo">
            </div>
            <div class="form-group">
                <strong>Edad:</strong>
                <input type="text" name="age" value="{{ $pet->age }}" class="form-control" placeholder="Edad">
            </div>
            <div class="form-group">
                <strong>Especie:</strong>
                <input type="text" name="specie" value="{{ $pet->specie }}" class="form-control" placeholder="Especie">
            </div>
            <div class="form-group">
                <strong>Raza:</strong>
                <input type="text" name="breed" value="{{ $pet->breed }}" class="form-control" placeholder="Raza">
            </div>



        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>

</form>


@endsection