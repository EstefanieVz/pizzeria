@extends('layout.main_template')
@section('content')
<br><br>
<style>
    .div{
        background-image: linear-gradient(rgb(255, 126, 40),rgba(255, 126, 40));
        align-items: center;
        text-align: center;
    }
    </style>
<div class="div">
    <br>
<h1>Detalles de la Pizza</h1>
<h3>Nombre: {{$pizza->name}}</h3>
<h3>Descripción: {{$pizza->description}}</h3>
<h3>Imagen:{{$pizza->image}}</h3>
<h3>Precio: {{$pizza->unit_price}}</h3>
<br>
<!-- TODO Show Image -->
</div>

@endsection