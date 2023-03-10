@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tienda</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-7">
                    <h4>Medicinas</h4>
                </div>
            </div>
            <hr>
            <div class="row" >
                @foreach($medicines as $pro)
                <div class="col-lg-3" >


                    <div class="card card text-white bg-secondary" style="margin-bottom: 20px; height: auto;">
                        <img src="/image/{{ $pro->image }}" class="card-img-top mx-auto" style="border-radius: 20%;margin-top: 20px;height: 150px; width: 150px;display: block;" alt="{{ $pro->image }}">


                        <div class="card-body">
                            <h6 class="card-title">{{ $pro->name }}</h6>
                            <p>${{ $pro->price }}</p>

                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                
                                <input type="hidden" value="{{ $pro->image}}" id="img" name="img">

                                <input type="hidden" value="1" id="quantity" name="quantity">

                                <input type="hidden" value="1" id="quantity" name="quantity">
                                <div class="card-footer bg-secondary border-white" style="background-color: white;">
                                    <div class="row">
                                        <button class="btn btn-success btn-sm" class="tooltip-test" title="add to cart">
                                            <i class="fa fa-shopping-cart"></i> Agregar al carrito
                                        </button>
                                        <a class="btn btn-secondary" href="{{ route('medicine_detail.show', $pro->id) }}"><i class="bi bi-info-circle"></i></a>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection