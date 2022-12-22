@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12">
        @can('edit-pets')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('pets.create') }}"> Registrar nueva mascota <i class="bi bi-plus-circle"></i></a>

        </div>
        @endcan
        @can('manage-medicines')
        <div class="text-center">
            <h2>Listado de mascotas registradas</h2>
        </div>
        @endcan

        @can('edit-pets')
        <div class="text-center">
            <h2>Mis Mascotas </h2>
        </div>
        @endcan


    </div>
</div>
@can('manage-medicines')
<div class="card-body">
    <table class="table table-hover">
        <tr class="thead-dark">
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th width="280px">Acciones</th>
            <th>Historia Clinica</th>
        </tr>
        @foreach ($pets as $pet)

        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $pet->image }}" class="img-thumbnail" style="border-radius: 20%; " width="100px"></td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->specie }}</td>
            <td>
                <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">

                    <!--<a class="btn btn-primary" href="{{ route('pets.show', $pet->id) }}">Información</a>-->

                    <a class="btn btn-primary" href="{{ route('pets.show', $pet->id) }}"><i class="bi bi-info-circle"></i></a>

                    @can('edit-pets')
                    <a class="btn btn-primary" href="{{ route('pets.edit',$pet->id) }}"><i class="bi bi-pencil-square"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    @endcan
                </form>
            </td>
            <td>
                <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">

                    <a class="btn btn-secondary" href="{{ route('history.index', ['id' => $pet->id]) }}"><i class="bi bi-file-earmark-text"></i></a>

                </form>
            </td>
        </tr>

        @endforeach
    </table>
</div>
@endcan

@can('edit-pets')
<div class="row" style="margin-top: 50px">
    @foreach ($pets as $pet)
    <div class="col-lg-3">
        <div class="card text-white bg-dark border-light  mb-3" style="margin-bottom: 20px; height: auto;">
            <div class="card-body">
                <p>{{ $pet->name }}</p>
                <p><img src="/image/{{ $pet->image }}" class="img-thumbnail" style="border-radius: 20%; " width="100px"></p>

                <p>Especie: {{ $pet->specie }}</p>
                <p>Edad: {{ $pet->age }}</p>

                <div class="card-footer bg-dark border-white" style="background-color: white;">

                    <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">

                        <!--<a class="btn btn-primary" href="{{ route('pets.show', $pet->id) }}">Información</a>-->

                        <a class="btn btn-primary" href="{{ route('pets.show', $pet->id) }}"><i class="bi bi-info-circle"></i></a>

                        @can('edit-pets')
                        <a class="btn btn-primary" href="{{ route('pets.edit',$pet->id) }}"><i class="bi bi-pencil-square"></i></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        @endcan



                    </form>

                </div>
                <div class="card-footer bg-dark border-white" style="background-color: white;">

                    <a class="btn btn-secondary" href="{{ route('history.index', ['id' => $pet->id]) }}"><i class="bi bi-file-earmark-text"></i></a>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endcan


{!! $pets->links() !!}
@endsection