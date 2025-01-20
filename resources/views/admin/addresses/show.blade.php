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
<br><br>
<style>
    .div{
        background-image: linear-gradient(rgb(255, 126, 40),rgba(255, 126, 40));
        align-items: center;
        text-align: center;
    }
    .button{
        width: 50px;
        text-decoration: none;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #ff8000;
        border-radius: 5px;
        color: #fff;
        background-color: #000;
    }
    </style>
<center>
    <div class="card text-center div" style="max-width: 400px;">
        <div class="card-header">
          Detalles de la Dirección
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$address->street}}</h5>
          <p class="card-text">No. Interno: {{$address->internal_num}}</p>
          <p class="card-text">No. Externo: {{$address->external_num}}</p>
          <p class="card-text">Vecindario: {{$address->neighborhood}}</p>
          <p class="card-text">Ciudad: {{$address->town}}</p>
          <p class="card-text">Estado: {{$address->state}}</p>
          <p class="card-text">País: {{$address->country}}</p>
    <p class="card-text">Código Postal: {{$address->postal_code}}</p>
    <p class="card-text">Referencia: {{$address->references}}</p>
          <a href="{{route("addresses.index",$address)}}" class="button">Regresar</a>
        </div>
        <div class="card-footer text-body-secondary">
          Todos los detalles
        </div>
      </div>

    </center>
    <br><br><br>
    <div>
    @include('fragments.footer')
    </div>
@endsection