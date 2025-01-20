@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<style>
.div{
        background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url('.../fondo/fondop.jpg');
    }
      .formregistro{
    width:300px;
    height: 380px;
    padding-inline:20px;
    border-radius: 12px;
    margin-block:auto;
    margin-inline:auto;
    background-color:#ff8000;
    } 
    .re{
        background-color: white; border: 2px solid #ff9800;
    }
    .re:hover{
        background: #000000; color: rgb(252, 147, 0);
    }
  </style>
  <div class="div">
    <br><br>
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

    <button type="submit" class="re">Registrar</button>
</form>
<br><br>
</div>
<br><br>
@endsection