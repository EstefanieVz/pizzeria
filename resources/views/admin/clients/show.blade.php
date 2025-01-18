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
<h1>Detalles del cliente</h1>
<h3>Nombre: {{$client->name}}</h3>
<h3>Apellido Paterno: {{$client->last_name}}</h3>
<h3>Apellido Materno: {{$client->second_last_name}}</h3>
<h3>Dirección: {{$client->address->street}}</h3>
<h3>Correo Electrónico: {{$client->email}}</h3>
<h3>Telefono: {{$client->phone}}</h3>
<br>
<!-- TODO Show Image -->
</div>
@endsection