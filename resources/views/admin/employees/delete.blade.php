@extends('layout.main_template')
@section('content')
<br>
<br><br>
<div class="div">
    <br><br>
<center>
    <table>
        <thead>
            <h3>¿Estás seguro de que quieres dar de baja al repartidor {{$employee->name_d}}?</h3>
        </thead>
        <tbody>
            <tr>
                <td><form action="{{route('employees.index')}}">
                <button type="submit">No</button>    
                </form></td>
                <td>
                    <form action="{{route('employees.destroy',$employee->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Si</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</center>
@endsection

<style>
    button{
        width: 50px;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #ff8000;
        border-radius: 5px;
        display: block;
        color: #fff;
        background-color: #000;
    }
    h3{
        width: 100%;
        color: rgb(255, 255, 255);
        height: 10px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
    }
    .div{
        background: #00000092;
        align-items: center;
        text-align: center;
    }
    </style>