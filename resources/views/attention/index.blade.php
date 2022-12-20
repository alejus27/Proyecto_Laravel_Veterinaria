@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('attention.create') }}"> Solicitar nueva atención médica</a>
        </div>

        <div class="text-center">
            <h2>Atenciones</h2>
        </div>

    </div>
</div>
<div class="card-body">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Descripción</th>
            <th width="280px">Acciones</th>
        
        </tr>
        @foreach ($attention as $pet)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pet-> date_attention}}</td>
            <td>{{ $pet->description }}</td>
            <td>

                <form action="{{ route('attention.destroy',$pet->id) }}" method="POST">

                    <a class="btn btn-dark" href="{{ route('attention.edit',$pet->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>

                </form>



            </td>

            
        </tr>
        @endforeach
    </table>
</div>
{!! $attention->links() !!}

@endsection