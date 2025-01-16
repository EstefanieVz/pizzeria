@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<style>
    .formregistro{
  width:250px;
  height: 600px;
  padding-inline:20px;
  border-radius: 12px;
  margin-block:auto;
  margin-inline:auto;
  background-color:#f06575;
  }
  </style>
<h1 id="titulo"> Editar Receta de Pizza</h1>

<form action="{{route('pizzas.update',$pizza->id)}}" method="POST" enctype="multipart/form-data" class="formregistro">
    @csrf
    @method('PUT')
    <br>
    <label for="" class="">Nombre</label>
    <input type="text" name="name" value="{{$pizza->name}}">


    <label for="" class="">Descripción</label>
    <input type="text" name="description" value="{{$pizza->description}}">

    <label for="" class="">Imagen</label>
    <input type="file" name="image" value="{{$pizza->image}}">

    <label for="" class="">Precio</label>
    <input type="text" name="unit_price" value="{{$pizza->unit_price}}">

    <button type="submit">Registrar</button>
</form>
@endsection