@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12" >
        @can('edit-pets')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('pets.create') }}"> Registrar nueva mascota </a>
        </div>
        @endcan
        <div class="text-center">
            <h2>Mascotas </h2>
        </div>

    </div>
</div>
<div class="card-body" >
<table class="table">
    <tr>
        <th>#</th>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Especie</th>
        <th width="280px">Acciones</th>
        <th>Gestión</th>
    </tr>
    @foreach ($pets as $pet)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src="/image/{{ $pet->image }}" width="100px"></td>
        <td>{{ $pet->name }}</td>
        <td>{{ $pet->specie }}</td>
        <td>
            <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">

                 <a class="btn btn-primary" href="{{ route('pets.show', $pet->id) }}">Información</a>
                

                @can('edit-pets')
                <a class="btn btn-dark" href="{{ route('pets.edit',$pet->id) }}">Editar</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Eliminar</button>
                @endcan
            </form>
        </td>
        <td>
            <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">

                <a class="btn btn-secondary" href="{{ route('history.index', ['id' => $pet->id]) }}">Historia Clinica</a>
               
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div>



{!! $pets->links() !!}

@endsection