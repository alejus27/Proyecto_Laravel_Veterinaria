@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('medicines.create') }}"> Registrar nueva medicina</a>
        </div>

        <div class="text-center">
            <h2>Inventario medicinas</h2>
        </div>

    </div>
</div>
<div class="card-body">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th width="280px">Acciones</th>
            <th width="280px">Detalles</th>
        </tr>
        @foreach ($medicines as $pet)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $pet->image }}" width="80px"></td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->price }}</td>
            <td>

                <form action="{{ route('medicines.destroy',$pet->id) }}" method="POST">

                    <a class="btn btn-dark" href="{{ route('medicines.edit',$pet->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>

                </form>



            </td>

            <td>

                <form action="{{ route('medicines.destroy',$pet->id) }}" method="POST">

                    <a class="btn btn-secondary" href="{{ route('medicine_detail.create', ['id' => $pet->id]) }}">Añadir</a>

                    <a class="btn btn-secondary" href="{{ route('medicine_detail.show', $pet->id) }}">Ver</a>
                   



                </form>



            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $medicines->links() !!}

@endsection