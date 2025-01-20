@extends('layout.main_template')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .colore{
        background:  #ff8000;
    }
    .topcentral{
        text-align: center;
        margin-block:auto;
        margin-inline:auto;
    }
    .container{
        max-width: 1840px;
        width: 100%;
        background:#565656;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }
    .container h2{
        padding: 2rem 1rem;
        font-size: 2.5rem;
        text-align: center;
    }
    .tbl{
        width: 100%;
        border-collapse: collapse;
    }
    .tbl thead{
        background:  #ff8000;
        color: #000000;
    }
    .tbl thead th{
        font-size: 0.9rem;
        padding: 0.8rem;
        letter-spacing: 0.2rem;
        vertical-align: top;
        border: 1px solid #ff8000;
    }
    .tbl tbody tr td{
        font-size: 1rem;
        letter-spacing: 0.2rem;
        font-weight: normal;
        text-align: center;
        border: 1px solid #e59444
    }
    a{
        text-decoration: none;
    }
    .re{
        background-color: rgba(77, 76, 76, 0); border: 2px solid #000000;
    }
    .re:hover{
        background: #000000; color: white;
    }
    @media(max-width: 768px){
        .tbl thead{
            display: none;
        }
        .tbl tr,
        .tbl td{
            display: block;
            width: 100%;
        }
        .tbl tr{
            margin-bottom: 1rem;
        }
        .tbl td::before{
            content: "";
            position: absolute;
        }
    }
</style>
</header><br><br><br>
<div class="topcentral">
        <h2 style="color: rgb(30, 30, 30)">INFORMACIÓN DE LOS EMPLEADOS</h2>
<br>
<button  class="re"><a href="{{route('drivers.index')}}" style="color: white">Ver Repartidores</a></button>
<button  class="re"><a href="{{route('employees.create')}}" style="color: white">Registrar Empleados</a></button>

<br>
</div>
<br><br>
<div class="container">
    <div class="tbl_container">
        <div class="colore">
        <h2>Empleados</h2>
        </div>
        <table class="tbl">
            <thead>
                <th > Nombre </th>
                <th> Apellido Paterno </th>
                <th> Apellido Materno </th>
                <th> Posición </th>
                <th> Salario </th>
                <th> Fecha de contratación </th>
                <th> Acciones </th>
            </thead>
        
            <tbody>
                @foreach ($employees as $e)
                <tr>
                    <td>{{$e->name_e}}</td>
                    <td>{{$e->last_name_e}}</td>
                    <td>{{$e->second_last_name_e}}</td>
                    <td> {{$e->position}} </td>
                    <td>{{$e->salary}}</td>
                    <td>{{$e->hiring_date}}</td>
                    
                    <td>
                        <button class="re"><a class="fa-solid fa-magnifying-glass" href="{{route("employees.show",$e)}}" style="color: white"></a></button>
                        <button class="re"><a class="fa-solid fa-pen-to-square" href="{{route("employees.edit",$e)}}" style="color: white"></a></button>
                        <button class="re"><a class="fa-solid fa-trash" href="{{route("employees.delete",$e)}}" style="color: white"></a></button>
                        
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
        {{$employees->links()}}<!-- GENERA LOS ENLACES DE CADA PÁGINA-->
        <br><br><br>
        @endsection