@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @can('edit-pets')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('pets.create') }}"> Create New pet</a>
        </div>
        @endcan
        <div class="pull-left">
            <h2>Mascotas </h2>
        </div>

    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Breed</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pets as $pet)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $pet->name }}</td>
        <td>{{ $pet->breed }}</td>
        <td>

            <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('pets.show', $pet->id) }}">Show</a>

                @can('history-pets')
                <a class="btn btn-warning" href="{{ route('history.index', ['id' => $pet->id]) }}">Gestión Historia Clinica</a>
                @endcan

                @can('edit-pets')
                <a class="btn btn-warning" href="{{ route('pets.edit',$pet->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>



        </td>
    </tr>
    @endforeach
</table>

{!! $pets->links() !!}

@endsection