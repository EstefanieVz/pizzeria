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
.cuadro{ 
        display: grid;
        grid-template-columns: repeat(2,1fr);
        text-align: justify;
    }
    body{
        overflow-x: hidden;
    }
    .centrar{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        padding-inline: 10px;
        text-justify:inter-word;
        text-align: justify;
        margin: 50px;
    }
    .textcentrar{
        text-align: center
    }
    .containe{
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }
    .header-content{
        text-align: center;
    }
    .header-content h1{
        font-size: 75px;
        line-height: 80px; color:rgb(255, 255, 255); 
        text-transform: uppercase;
        margin-bottom: 35px;
    }
    .header-content p{
        font-size: 16px;
        color: #c5c5c5;
        padding: 0 250px;
        margin-bottom: 25px;
    }
    .btn-1{
        display:inline-block; padding: 11px 35px;
        background-color: #ce9678;
        color: #fafafa ;
        text-transform: uppercase;
        text-decoration: none;
    }
    .btn-1:hover{
        background-color: #cc8259;
    }
    .welcome{
        display: flex;
    }
    .welcome-1{
    background-image: url(fondo/medio.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 50%;
    }
    .welcome-2{
        width: 50%;
        padding:135px 100px 150px 100px; 
        background-color: #191919;
    }
    h2{
        font-size: 50px;
        line-height: 100px;
        color: #ff8000;
        text-transform: uppercase;
        margin-bottom: 15px;
        font-family: "Oswald", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
    }
    p{
        font-size: 16px;
        color: 25px 0;
    }
    .b1{
        color: #c5c5c5;text-align: justify;
    }
</style>
<br><br><br><br>
<div class="header-content containe header">
        <h1 class="oswald" style="font-size: 100px">Los diferentes tipo de</h1>
        <h1 class="oswald" style="font-size: 100px">pizza</h1>
        <p class="txt-p mulish">¡Descubre el sabor de la auténtica pizza italiana en PizzArt! Nuestra pasión es crear pizzas únicas y deliciosas que te harán querer volver por más. Explora nuestra carta, conoce nuestras promociones y ¡ordena ahora mismo!</p>
<a href="#section" class="btn-1 oswald">Informacion</a>

</div>
<br><br><br><br><br>
</header>
<section class="welcome">
    <div class="welcome-1"></div>
    <div class="welcome-2">
        <h2 class="oswal">¡Bienvenidos a PizzArt!</h2>
        <p class="b1">Nuestra pasión por la pizza nos lleva a seleccionar solo los ingredientes frescos y de alta calidad para crear recetas únicas y sabrosas. Desde clásicos favoritos hasta creaciones innovadoras, tenemos algo para todos los gustos.
        Explora nuestro menú y descubre nuestras pizzas más populares, como la clásica Margarita, la sabrosa Quattro Formaggi o la innovadora Pizza de Camarón. También ofrecemos opciones vegetarianas y veganas, así como pizzas sin gluten.
    </p>       <p class="b1">¿Quieres disfrutar de tu pizza en casa? ¡No hay problema! Ofrecemos servicio de entrega a domicilio y recogida en tienda. Simplemente elige tu pizza y déjanos hacer el resto.
        En PizzArt, nos emociona servirte y convertirnos en tu pizzería favorita. 
        ¡Disfruta de tu pizza!</p>
    </div>
</section><br><br>
<h2 class="oswal" style="text-align: center; color:#ffffff">MIRA NUESTRO MENÚ</h2>
<div class="row row-cols-1 row-cols-md-3" id="section">
    <div class="col">
      <div class="card text-bg-dark">
        <img src="{{ asset('fondo/pizzas.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pizza Especial</h5>
          <p class="card-text">Incluye muzza, jamón, huevo, morrones y aceitunas, preparada para que sientas una explosión de sabores.</p>
        </div>
      </div>
    </div>

    <div class="col">
        <div class="card" style="background-color: #ff8000">
          <img src="{{ asset('fondo/pizza2.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="color: #ffffff">Pizza de Pepperoni</h5>
            <p class="card-text" style="color: #ffffff">Pizza grande cubierta con nuestra deliciosa salsa clásica, pepperoni, champiñones y extra queso.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card text-bg-dark">
          <img src="{{ asset('fondo/pizza3.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pizza Margarita Clasica</h5>
            <p class="card-text">Incluye salsa de tomate roja, mozzarella blanca y albahaca verde fresca .</p>
          </div>
        </div>
      </div>
</div>  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@include('fragments.footer')
@endsection