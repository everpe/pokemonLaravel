@extends('layouts.app')
@section('title','Trainers Create')

@section('content')

<form class="form-group"  method="POST" action="{{ url('/trainers')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="avatar" >
        </div>
        <div class="form-group">
                <label for="">Descripción</label>
                <input type="text" name="description" class="form-control">
        </div>
        <button type="submit"  class="btn btn-primary">Guardar</button>
</form>
<a href="{{ url('/trainers')}}">regresar</a>    

{{--  --}}
        
@endsection
