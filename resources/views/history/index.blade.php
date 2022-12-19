@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('history.create' , ['id' => request()->id])}}"> Create New History</a>
        </div>
      
        <div class="pull-left">
            <h2>Versiones Historias Clinicas</h2>
        </div>

    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Motivo</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($clinicalHistory as $clinicalHistor)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $clinicalHistor->reason_consultation }}</td>
        <td>

            <form action="{{ route('history.destroy', $clinicalHistor->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('history.show', $clinicalHistor->id) }}">Show</a>
                <a class="btn btn-warning" href="{{ route('history.edit', $clinicalHistor->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
              
            </form>



        </td>
    </tr>
    @endforeach
</table>

{!! $clinicalHistory->links() !!}

@endsection