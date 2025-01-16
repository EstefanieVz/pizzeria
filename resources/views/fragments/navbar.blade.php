<style>
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
    .menu{
        display: grid; 
        grid-template-columns: repeat(4,1fr);
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

</style>

<header class="header">
    <nav class="menu">
        
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('pizzas.index')}}">Pizzas</a>
            <a href="{{route('addresses.index')}}">Direcciones</a>
            <a href="{{route('orders.index')}}">Ordenes</a>
        
    </nav>

<br>
<br>