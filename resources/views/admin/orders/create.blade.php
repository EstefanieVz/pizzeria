@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<div class="div">
    <br><br>
<h1 id="titulo"> Vista de Pedidos</h1>

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
    width:290px;
    height: 390px;
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
<form action="{{route('orders.store')}}" enctype="multipart/form-data" method="POST" class="formregistro">
    @csrf
    <br>

    <label for="" class="">Cliente</label>
    <br>
    <select name="client_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($clients as $client => $id)
        <option value="{{$id}}">{{$client}}</option>     
        @endforeach
    </select>
    <br>

    <label for="" class="">Dirección</label>
    <br>
    <select name="address_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($addresses as $address => $id)
        <option value="{{$id}}">{{$address}}</option>     
        @endforeach
    </select>
    <br>

    <label for="" class="">Pizza</label>
    <br>
    <select name="pizza_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($pizzas as $pizza => $id)
        <option value="{{$id}}">{{$pizza}}</option>     
        @endforeach
    </select>
    <br>

    <label for="" class="">Fecha del Pedido</label><br>
    <input type="date" name="order_date">
<br>
    <label for="" class="">Costo</label>
    <input type="number" name="order_total">

    <label for="" class="">Método de Pago</label>
    <select name="payment_method">
        <option value="Efectivo">Pago en efectivo</option>
        <option value="Tarjeta">Pago con tarjeta</option>
        <option value="Transferencias">Transferencias</option>
      </select>

    <button type="submit">Registrar</button>
</form>
<br><br>
</div>
<br><br>
@endsection