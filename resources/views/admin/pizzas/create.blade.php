@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<div class="div">
    <br><br>
<h1 id="titulo"> Crear Nueva Pizza</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif
<style>
    .div{
        background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7));
    }
      .formregistro{
    width:300px;
    height: 300px;
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
    
<form action="{{route('pizzas.store')}}" enctype="multipart/form-data" method="POST" class="formregistro">
    @csrf
    <br>
    <label for="" class="">Nombre</label>
    <input type="text" name="name">

    <label for="" class="">Descripción</label>
    <input type="text" name="description">

    <label for="" class="">Imagen</label>
    <input type="file" name="image">

    <label for="" class="">Precio</label>
    <input type="number" name="unit_price">

    <button type="submit" class="re">Registrar</button>
</form>
<br><br>
</div>
<br><br>
@endsection