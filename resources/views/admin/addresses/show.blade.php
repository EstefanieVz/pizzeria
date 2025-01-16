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
<h1>Detalles de la dirección</h1>
<h3>Calle: {{$address->street}}</h3>
<h3>No. Interno: {{$address->internal_num}}</h3>
<h3>No. Externo: {{$address->external_num}}</h3>
<h3>Vecindario: {{$address->neighborhood}}</h3>
<h3>Ciudad: {{$address->town}}</h3>
<h3>Estado: {{$address->state}}</h3>
<h3>País: {{$address->country}}</h3>
<h3>Código Postal: {{$address->postal_code}}</h3>
<h3>Referencia: {{$address->references}}</h3>
<br>
<!-- TODO Show Image -->
</div>
<br>
@endsection