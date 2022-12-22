@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('medicines.create') }}"> Registrar nueva medicina<i class="bi bi-plus-circle"></i></a>
        </div>



        <div class="text-center">
            <h2>Inventario medicinas</h2>
        </div>

    </div>
</div>
<div class="card-body">
    <table class="table table-hover">
        <tr class="thead-dark">
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
            <td><img src="/image/{{ $pet->image }}" class="img-thumbnail"width="80px"></td>
            <td>{{ $pet->name }}</td>
            <td>${{ $pet->price }}</td>
            <td>

                <form action="{{ route('medicines.destroy',$pet->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('medicines.edit',$pet->id) }}"><i class="bi bi-pencil-square"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>

                </form>



            </td>

            <td>

                <form action="{{ route('medicines.destroy',$pet->id) }}" method="POST">

                    <a class="btn btn-secondary" href="{{ route('medicine_detail.create', ['id' => $pet->id]) }}"><i class="bi bi-file-earmark-plus"></i></a>

                    <a class="btn btn-secondary" href="{{ route('medicine_detail.show', $pet->id) }}"><i class="bi bi-eye"></i></a>
                   



                </form>



            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $medicines->links() !!}

@endsection