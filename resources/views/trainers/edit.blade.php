@extends('layouts.app')
@section('title','Trainers Edit')

@section('content')

<form class="form-group"  method="POST" action="{{ url('/trainers/'.$trainer->slug)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
    </div>

    <div class="form-group">
        <img style="margin:20px;height:100px; width:100px; background-color:#EFEFEF" 
        src="{{URL::asset('images/')}}./{{$trainer->avatar}}"  class="card-img-top rounded-circle mx-auto d-block" alt="...">
        <label for="">Foto</label>
        <input type="file" name="avatar" >
        </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <input type="text" name="description" value="{{$trainer->description}}" class="form-control">
    </div>
    <button type="submit"  class="btn btn-info">Actualizar</button>
</form>
<a href="{{ url('/trainers')}}">regresar</a>    


@endsection
