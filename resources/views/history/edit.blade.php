@extends('layouts.app')

@section('content')



<div class="row" style="margin-top: 50px">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Editar mascota</h2>
        </div>

    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('history.update',$history->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Motivo consulta: </strong>
                    <input type="text" name="reason_consultation" value="{{ $history->reason_consultation }}" class="form-control" placeholder="">
                  
                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vacunación: </strong>
                    <input type="text" name="vaccination" value="{{ $history->vaccination }}" class="form-control" placeholder="">

                 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Esterilizado: </strong>
                    <input type="text" name="sterilized" value="{{ $history->sterilized }}" class="form-control" placeholder="">

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Peso: </strong>
                    <input type="text" name="weight" value="{{ $history->weight }}" class="form-control" placeholder="">

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pulso: </strong>
                    <input type="text" name="pulse" value="{{ $history->pulse}}" class="form-control" placeholder="">

             
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Desparasitación: </strong>
                    <input type="text" name="deworming" value="{{ $history->deworming }}" class="form-control" placeholder="">

              
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Antecedentes: </strong>
                    <input type="text" name="antecedents" value="{{ $history->antecedents }}" class="form-control" placeholder="">

              
                </div>
            </div>



        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>

</form>


@endsection