@extends('layouts.app')
@section('title','Trainers Show')

{{-- @section('content')
<p>Entrenador {{$trainer->name}}</p> --}}

@section('content')
<h2  class="text-center">Entrenador:</h2>
<div style="margin-left:400px">
    
    <div>
        <div class="card text-center" style="width: 18rem;margin-top:20px">
            <h2>{{$trainer->name}}</h2>
            <img style="margin:20px;height:100px; width:100px; background-color:#EFEFEF" 
            src="{{URL::asset('images/')}}./{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
            
            <p>{{$trainer->description}}</p>  
            <a href="{{ url('/trainers/'.$trainer->slug.'/edit') }}" class="btn btn-primary">Editar</a>  
        </div>
    </div>
    <br>
    <a  class="btn btn-info" href="{{ url('/trainers')}}">Lista Entrenadores</a>    
    
</div>
    


    
    {{-- <img src="{{URL::asset('images/1574649551ash.png')}}" --}}
    
@endsection