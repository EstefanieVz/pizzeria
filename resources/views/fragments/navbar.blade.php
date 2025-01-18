<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<style>

.oswald{
  font-family: "Oswald", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
    header{
        background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url('fondo/fondop.jpg');
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
        background-position:center bottom;
        background-repeat:no-repeat;
        background-size:cover;
        min-height:70vh;
    }  
    .menus{
        display: grid; 
        grid-template-columns: repeat(5,1fr);
    }
    nav a{
        padding: 20px;
        font-weight: 600;
        text-decoration:none;
        padding-block: 10px;
        padding-inline: 10px;
        color:rgb(255, 255, 255);
        margin-inline: -4px;
    }
    nav a{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding-inline: 10px;
        text-justify:inter-word;
        grid-auto-flow: column;
        text-align: center;
    }
    nav a:hover{
        background: #ff8000;
        padding-block: 20px;
        padding-inline: 10px;
    }
    .mulish{
  font-family: "Mulish", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}


</style>

<header class="header">
    <nav class="menus">
        
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('pizzas.index')}}">Pizzas</a>
            <a href="{{route('addresses.index')}}">Direcciones</a>
            <a href="{{route('orders.index')}}">Ordenes</a>
            <a href="{{route('drivers.index')}}">Repartidores</a>
        
    </nav>

<br>
<br>