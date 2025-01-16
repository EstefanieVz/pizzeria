@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<div class="div">
    <br><br>
<h1 id="titulo"> Crear nueva Dirección</h1>

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
    width:250px;
    height: 600px;
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
<form action="{{route('addresses.store')}}" enctype="multipart/form-data" method="POST" class="formregistro">
    @csrf
    <br>
    <label for="" class="">Calle</label>
    <input type="text" name="street">

    <label for="" class="">No. Interno</label>
    <input type="number" name="internal_num">

    <label for="" class="">No. Externo</label>
    <input type="number" name="external_num">

    <label for="" class="">Vecindario</label>
    <input type="text" name="neighborhood">

    <label for="" class="">Ciudad</label>
    <input type="text" name="town">

    <label for="" class="">Estado</label>
    <input type="text" name="state">

    <label for="" class="">País</label>
    <input type="text" name="country">

    <label for="" class="">Código Postal</label>
    <input type="number" name="postal_code">

    <label for="" class="">Referencia</label>
    <input type="text" name="references">


    <button type="submit">Registrar</button>
</form>
<br><br>
</div>
<br><br>
@endsection