@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('veterinary.create') }}"> Registrar nueva veterinaria</a>
        </div>
        
        <div class="text-center">
            <h2>Clinicas veterinarias</h2>
        </div>

    </div>
</div>

<div class="card-body">
<table class="table">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th width="280px">Acciones</th>
    </tr>
    @foreach ($veterinary as $pet)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $pet->name }}</td>
        <td>{{ $pet->phone }}</td>
        <td>{{ $pet->address }}</td>
        <td>

            <form action="{{ route('veterinary.destroy',$pet->id) }}" method="POST">
            
                <a class="btn btn-dark" href="{{ route('veterinary.edit',$pet->id) }}">Editar</a>


                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Eliminar</button>
               
            </form>



        </td>
    </tr>
    @endforeach
</table>
</div>

{!! $veterinary->links() !!}

@endsection