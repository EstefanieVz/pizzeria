@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
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
    <div class="div">
      <br><br>
<h1 id="titulo"> Editar Direcciones</h1>

<form action="{{route('addresses.update',$address->id)}}" method="POST" enctype="multipart/form-data" class="formregistro">
    @csrf
    @method('PUT')
    <br>
    <label for="" class="">Client</label>
    <br>
    <select name="client_id" id="">
      <option value="">Selecciona. . .</option>

      @foreach ($clients as $client => $id)
      <option {{$order->client_id==$id ? 'selected' : ''}} value="{{$id}}">{{$order}}</option>     
      @endforeach
      
  </select>
    <br>

    <label for="" class="">Dirección</label>
    <br>
    <select name="address_id" id="">
      <option value="">Selecciona. . .</option>

      @foreach ($addresses as $address => $id)
      <option {{$order->address_id==$id ? 'selected' : ''}} value="{{$id}}">{{$order}}</option>     
      @endforeach
      
  </select>
    <br>

    <label for="" class="">Pizza</label>
    <br>
    <select name="pizza_id" id="">
      <option value="">Selecciona. . .</option>

      @foreach ($pizzas as $pizzas => $id)
      <option {{$order->pizza==$id ? 'selected' : ''}} value="{{$id}}">{{$order}}</option>     
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