@extends('layouts.app')

@section('content')

<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Solicitar nueva atención médica</h2>
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

<form action="{{ route('attention.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <strong>Descripción:</strong>
                <input type="text" name="price" class="form-control" placeholder="Precio">
            </div>

            <div class="form-group">
                <strong>Seleccione mascota:</strong>
                <select name="id_pet">
                    @foreach($pets as $category)
                    <option value="{{$category->id}}">{{$category->name}}></option>
                    @endforeach
                </select>

            </div>


            <div class="form-group">
                <strong>Seleccione veterinaria:</strong>
                <select name="id_veterinary">
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