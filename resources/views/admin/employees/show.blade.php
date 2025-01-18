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
<h3>Nombre: {{$employee->name_e}}</h3>
<h3>Apellido Paterno: {{$employee->last_name_e}}</h3>
<h3>Apellido Materno: {{$employee->second_last_name_e}}</h3>
<h3>Posición: {{$employee->position}}</h3>
<h3>Salario Actual: {{$employee->salary}}</h3>
<h3>Fecha de Contratación: {{$employee->hiring_date}}</h3>
<br>
<!-- TODO Show Image -->
</div>
<br>
@endsection