@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<div class="div">
    <br><br>
<h1 id="titulo"> Crear Clientes</h1>

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
    height: 450px;
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
<form action="{{route('clients.store')}}" enctype="multipart/form-data" method="POST" class="formregistro">
    @csrf
    <br>
    <label for="" class="">Nombre</label>
    <input type="text" name="name">

    <label for="" class="">Apellido Paterno</label>
    <input type="text" name="last_name">

    <label for="" class="">Apellido Materno</label>
    <input type="text" name="second_last_name">


    <label for="" class="">Dirección</label>
    <br>
    <select name="address_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($addresses as $address => $id)
        <option value="{{$id}}">{{$address}}</option>     
        @endforeach
    </select>
    <br>

    <label for="" class="">Correo Electrónico</label>
    <input type="text" name="email">

    <label for="" class="">Telefono</label>
    <input type="number" name="phone">

    <button type="submit">Registrar</button>
</form>
<br><br>
</div>
<br><br>
@endsection