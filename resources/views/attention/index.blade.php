@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
    @can('edit-pets')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('attention.create') }}"> Solicitar nueva atención médica<i class="bi bi-plus-circle"></i></a>
        </div>
        @endcan
        <div class="text-center">
            <h2>Atención médica</h2>
        </div>

    </div>
</div>
<div class="card-body">
    <table class="table table-hover">
        <tr class="thead-dark">
            <th>#</th>
            <th>Fecha</th>
            <th>Motivo de consulta</th>
            <th width="280px">Acciones</th>
            <th width="280px">Diagnostico</th>

        </tr>
        @foreach ($attention as $pet)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pet-> date_attention}}</td>
            <td>{{ $pet-> description }}</td>
            <td>

                <form action="{{ route('attention.destroy',$pet->id) }}" method="POST">
                    @can('edit-pets')
                    <a class="btn btn-primary" href="{{ route('attention.edit',$pet->id) }}"><i class="bi bi-pencil-square"></i></a>
                    @endcan
                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

                </form>



            </td>

            <td>
                <form action="{{ route('medicines.destroy',$pet->id) }}" method="POST">
                    @can('manage-medicines')
                    <a class="btn btn-secondary" href="{{ route('diagnoses.create', ['id' => $pet->id]) }}"><i class="bi bi-file-earmark-plus"></i></a>
                    @endcan

                    <a class="btn btn-secondary" href="{{ route('diagnoses.show', $pet->id) }}"><i class="bi bi-eye"></i></a>

                </form>
            </td>

        </tr>
        @endforeach
    </table>
</div>
{!! $attention->links() !!}

@endsection