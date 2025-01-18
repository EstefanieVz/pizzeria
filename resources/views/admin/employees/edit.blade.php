@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<style>
  .div{
          background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7));
      }
        .formregistro{
      width:300px;
      height: 400px;
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
<h1 id="titulo"> Editar Datos del Repartidor</h1>

<form action="{{route('employees.update',$employee->id)}}" method="POST" enctype="multipart/form-data" class="formregistro">
    @csrf
    @method('PUT')
    <br>
    <label for="" class="">Nombre</label>
    <input type="text" name="name_e">

    <label for="" class="">Apellido Paterno</label>
    <input type="text" name="last_name_e">

    <label for="" class="">Apellido Materno</label>
    <input type="text" name="second_last_name_e">

    <label for="" class="">Posición</label>
    <input type="text" name="position">

    <label for="" class="">Salario</label>
    <input type="number" name="salary">

    <label for="" class="">Fecha de contratación</label>
    <input type="date" name="hiring_date">

    <button type="submit">Registrar</button>
</form>
<br><br>
</div>
<br><br>
@endsection