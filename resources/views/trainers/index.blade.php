@extends('layouts.app')
@section('title','Trainers Index')

@section('content')
    <p>Listado de Los entrenadores:</p>

    <div class="row">
        @foreach ($trainers as $trainer)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem;margin-top:20px">
                <img style="margin:20px;height:100px; width:100px; background-color:#EFEFEF" src="images/{{$trainer->avatar}}" 
                        class="card-img-top rounded-circle mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">{{$trainer->description}}</p>
                        <a href="{{ url('/trainers/'.$trainer->slug) }}" class="btn btn-primary">Ver</a>
                    </div>
                </div>
            </div>
        @endforeach    
    </div>
    
@endsection