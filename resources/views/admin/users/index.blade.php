@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{implode(',' ,$user->roles()->get()->pluck('name')->toArray())}}</td>
            <td>

            @can('edit-users') <!--can expects what gate you want to use-->
            <a href="{{route('admin.users.edit', $user->id)}}" ><button type="button" class="btn btn-dark">Editar</button></a>
            @endcan

            @can('delete-users')    
            <form action="{{route('admin.users.destroy', $user)}}" method="POST" class="float-left">
                @csrf
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            @endcan   
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
