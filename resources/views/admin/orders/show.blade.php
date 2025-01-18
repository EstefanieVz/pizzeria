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

<h1>Detalles del Pedido</h1>
<h3>Nombre del Cliente: {{$order->client->name}}</h3>
<h3>Dirección: {{$order->address->street}}</h3>
<h3>Nombre de la Pizza: {{$order->pizza->name}}</h3>

<h3>Apellido Paterno: {{$order->order_date}}</h3>
<h3>Apellido Materno: {{$order->order_total}}</h3>
<h3>Correo Electrónico: {{$order->payment_method}}</h3>

<br>
<!-- TODO Show Image -->
</div>
@endsection