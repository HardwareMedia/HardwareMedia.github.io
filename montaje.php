<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Montaje - Hardware Media</title>
    <link rel="stylesheet" type="text/css" href="montaje.css"></rel>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
        <div class="loader">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
                <script type="text/javascript">
                    $(window).load(function(){
                        $(".loader").delay(600).fadeOut(1000);
                    });
                    </script>
        </div>
        
    <?php
       include_once("includes/header.php"); 
    ?>

<div class="caja">
<main>
    <fieldset>
        <div class="titulo">MONTAJE</div>
        <div class="Noticia1">
            <br>
            <div class="subtitulo">Índice</div>
            <ul class="indice">
                <li><a class="indicea" href="#Basico">Montaje Básico</a></li>
                <li><a class="indicea" href="#Custom">Montaje Custom</a></li>
            </ul>      
        </div>

        <a name="Basico" style="visibility: hidden;">1</a>
        <div class="Noticia1">
             <div class="subtitulo">Montaje Básico</div>
        En el montaje básico usted nos da las piezas que desee montar 
        y nosotros realizaremos la mano de obra necesaria.<br>
        <br>
        Si no quiere que le instalemos un sistema operativo, 
        el montaje de las piezas <span style="color:darkred; font-weight: bold;">le 
        costará tan solo 10€</span>, si además desea un sistema operativo 
        instalado <span style="color:darkred; font-weight: bold;">le costará alrededor de 20€</span>.          
        </div>

        <a name="Custom" style="visibility: hidden;">1</a>
        <div class="Noticia1">
            <div class="subtitulo">Montaje Custom</div>
        En el montaje custom usted nos dice los componentes que desea para su nueva torre 
        y nosotros le ayudamos a seleccionar las mejores piezas que se ajusten a su 
        ordenador, nosotros las pedimos y nos encargamos del montaje.<br>
        <br>
        En este tipo de montaje incluimos una licencia de Windows 10.<br>
        <br>
        <span style="color:darkred; font-weight: bold;">El precio del montaje custom es de 40€</span> y si además desea algún extra como una 
        backplate o cualquier otro elemento de nuestra <a href="tienda.php">tienda</a> deberá pagarlo 
        a parte, pese a que lo añadiremos cuando realizemos el montaje de los componentes 
        para que tenga su ordenador completo con los accesorios que desee.<br>
        <br>
        Si lo que desea es una actualización o montaje más personal quizas debería pasarse por nuestra sección 
        de <a href="modding.php">modding</a>, en esta le preparamos una torre mucho más personal con 
        la decoración y aparencia que usted desee.
        </div>



    </fieldset>
</main>
</div>

</body>
</html>