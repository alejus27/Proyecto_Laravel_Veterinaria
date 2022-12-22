@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
    @can('history-pets')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('history.create' , ['id' => request()->id])}}"> Registrar nueva historia clinica<i class="bi bi-plus-circle"></i></a>
        </div>
        @endcan

        <div class="text-center">
            <h2>Versiones Historias Clinicas</h2>
        </div>

    </div>
</div>
<div class="card-body">
<table class="table table-hover">
    <tr class="thead-dark">
        <th>#</th>
        <th>Motivo</th>
        <th width="280px">Acción</th>
     
        
    </tr>
    @foreach ($history as $ch)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $ch->reason_consultation }}</td>
        <td>

            <form action="{{ route('history.destroy', $ch->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('history.show', $ch->id) }}"><i class="bi bi-info-circle"></i></a>

                @can('history-pets')
                <a class="btn btn-primary" href="{{ route('history.edit', $ch->id) }}"><i class="bi bi-pencil-square"></i></a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                @endcan
              
            </form>



        </td>
    </tr>
    @endforeach
</table>
</div>
{!! $history->links() !!}

@endsection