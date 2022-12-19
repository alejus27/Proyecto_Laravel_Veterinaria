@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-left">
            <h2>Información mascota</h2>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $pet->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sex:</strong>
            {{ $pet->sex}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          
            <strong>Age:</strong>
            {{ $pet->age}}
           
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
            <strong>Specie:</strong>
            {{ $pet->specie}}
         
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
            <strong>Breed:</strong>
            {{ $pet->breed}}
        </div>
    </div>
   
</div>
@endsection