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
<h1>Detalles del repartidor</h1>
<h3>Nombre: {{$driver->name_d}}</h3>
<h3>Apellido Paterno: {{$driver->last_name_d}}</h3>
<h3>Apellido Materno: {{$driver->second_last_name_d}}</h3>
<h3>Salario Actual: {{$driver->salary_d}}</h3>
<h3>Fecha de Contratación: {{$driver->hiring_date_d}}</h3>
<br>
<!-- TODO Show Image -->
</div>
<br>
@endsection