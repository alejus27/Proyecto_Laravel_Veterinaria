@extends('layouts.app')

@section('content')

<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Añadir nueva mascota</h2>
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

<form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <strong>Sexo:</strong>
                <input type="text" name="sex" class="form-control" placeholder="Sexo">
            </div>
            <div class="form-group">
                <strong>Edad:</strong>
                <input type="text" name="age" class="form-control" placeholder="Edad">
            </div>
            <div class="form-group">
                <strong>Especie:</strong>
                <input type="text" name="specie" class="form-control" placeholder="Especie">
            </div>

            <div class="form-group">
                <strong>Raza:</strong>
                <input type="text" name="breed" class="form-control" placeholder="Raza">
            </div>

            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>


            <div class="form-group">
                <strong>Veterinaria que frecuenta:</strong>
                <select name="id_vet">
                    @foreach($vets as $category)
                    <option value="{{$category->id}}">{{$category->name}}></option>
                    @endforeach
                </select>

            </div>



        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection