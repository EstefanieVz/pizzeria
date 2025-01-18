@extends('layout.main_template')

@section('content')
<style>
.cuadro{ 
        display: grid;
        grid-template-columns: repeat(2,1fr);
        text-align: justify;
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
</style>
<br><br>
<div class="header-content containe header">
        <h1 class="oswald" style="font-size: 100px">Los diferentes tipo de</h1>
        <h1 class="oswald" style="font-size: 100px">pizza</h1>
        <p class="txt-p mulish">¡Descubre el sabor de la auténtica pizza italiana en PizzArt! Nuestra pasión es crear pizzas únicas y deliciosas que te harán querer volver por más. Explora nuestra carta, conoce nuestras promociones y ¡ordena ahora mismo!</p>
<a href="#" class="btn-1 oswald">Informacion</a>

</div>
<br><br><br><br>
</header>


<br><br><br>
<h1 class="textcentrar" style="color: #fafafa">¡Bienvenidos a PizzArt!</h1>
<h2 class="textcentrar" style="color: #fafafa">¿Estás listo para disfrutar de la mejor pizza de la ciudad?</h2>
<div class="cuadro">

    <div class="centrar mulish" style="color: #e7ddc6">
        <p>Nuestra pasión por la pizza nos lleva a seleccionar solo los ingredientes frescos y de alta calidad para crear recetas únicas y sabrosas. Desde clásicos favoritos hasta creaciones innovadoras, tenemos algo para todos los gustos.</p>
        <p>Explora nuestro menú y descubre nuestras pizzas más populares, como la clásica Margarita, la sabrosa Quattro Formaggi o la innovadora Pizza de Camarón. También ofrecemos opciones vegetarianas y veganas, así como pizzas sin gluten.</p>
        <p>¿Quieres disfrutar de tu pizza en casa? ¡No hay problema! Ofrecemos servicio de entrega a domicilio y recogida en tienda. Simplemente elige tu pizza y déjanos hacer el resto.</p>     
        <p>En PizzArt, nos emociona servirte y convertirnos en tu pizzería favorita.</p>       
        <p>¡Disfruta de tu pizza!</p>
    </div>

   <div class="centrar">
        <img src="{{ asset('fondo/dulces.png') }}" style="weight:500px; height:500px;">
    </div>
   
</div>


@endsection