
<style>
    header {
        background-color: rgba(16,16,16,0.8);
        padding-block: 4px;
/*
        padding-block-start: 4px;
        padding-block-end: 4px;

        padding-top: 4px;
        padding-bottom: 4px;

        padding: 4px;
        border: 5px;
        margin: 5px;


        padding-block: 4px;
        padding-inline: 4px;
*/
        margin-block: -8px;
        margin-inline: -8px;
    }



    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        padding-inline: 10px;

    }


    nav p a {
        color: lemonchiffon;
        text-decoration: none;
        padding-block: 10px;
        padding-inline:10px;
        margin-inline: -4px;
    }


    nav p a:hover{
        background: orange;
        padding-block: 20px;
    }


    
</style>

<header>
<nav>
    <p>
        <a href=" {{route('index')}} ">Inicio</a>
        <a href="{{route('products')}} ">Productos</a>
        <a href=" {{route('clients')}} ">Clientes</a>
        <a href=" {{route('sales')}} ">Ventas</a>

    </p>
</nav>
</header>
<br>