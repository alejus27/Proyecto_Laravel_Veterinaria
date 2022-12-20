@extends('layouts.app')

@section('content')



<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Editar centro clinico</h2>
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

<form action="{{ route('veterinary.update',$veterinary->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{ $veterinary->name }}" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Telefono:</strong>
                <input type="text" name="phone" value="{{ $veterinary->phone }}" class="form-control" placeholder="Telefono">
            </div>

            <div class="form-group">
                <strong>Dirección:</strong>
                <input type="text" name="address" value="{{ $veterinary->address }}" class="form-control" placeholder="Dirección">
            </div>
           

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>

</form>


@endsection