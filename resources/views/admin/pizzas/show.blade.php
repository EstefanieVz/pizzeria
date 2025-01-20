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
<style>
  .div{
      background-image: linear-gradient(rgb(255, 126, 40),rgba(255, 126, 40));
    align-content: center;
    align-items: center;
  }
  </style>
<center>
  <br><br>
<div class="center card div" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/image/pizzas/{{$pizza->image}}" width="500px" alt="Pizza" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Detalles de la Pizza</h5>
        <p>Nombre: {{$pizza->name}}</p>
            <p>Descripción: {{$pizza->description}}</p>
            <p>Precio: {{$pizza->unit_price}}</p>
        <p class="card-text"><small class="text-body-secondary">Ultima actualización</small></p>
      </div>
    </div>
  </div>
</div>
</center>
<br><br><br><br><br>
<div>
@include('fragments.footer')
</div>
@endsection
