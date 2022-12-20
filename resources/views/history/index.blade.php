@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">
    @can('history-pets')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('history.create' , ['id' => request()->id])}}"> Registrar nueva historia clinica</a>
        </div>
        @endcan

        <div class="text-center">
            <h2>Versiones Historias Clinicas</h2>
        </div>

    </div>
</div>
<div class="card-body">
<table class="table">
    <tr>
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

                <a class="btn btn-primary" href="{{ route('history.show', $ch->id) }}">Información</a>

                @can('history-pets')
                <a class="btn btn-dark" href="{{ route('history.edit', $ch->id) }}">Editar</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Eliminar</button>
                @endcan
              
            </form>



        </td>
    </tr>
    @endforeach
</table>
</div>
{!! $history->links() !!}

@endsection