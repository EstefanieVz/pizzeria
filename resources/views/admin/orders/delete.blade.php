<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
@extends('layout.main_template')
@section('content')
<br><br><br><br><br><br>
<center>
    <table>
        <thead>
            <h3>¿Estás seguro de que quieres eliminar el pedido del cliente {{$order->client->name}}?</h3>
        </thead>
        <tbody>
            <tr>
                <td><form action="{{route('orders.index')}}">
                <button type="submit">No</button>    
                </form></td>
                <td>
                    <form action="{{route('orders.destroy',$order->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Si</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</center>
<br><br><br><br><br><br>
<div>
    @include('fragments.footer')
    </div>
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
