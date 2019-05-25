<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio - Hardware Media</title>
    <link rel="stylesheet" type="text/css" href="index.css"></rel>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
        <div class="loader">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
                <script type="text/javascript">
                    $(window).load(function(){
                        $(".loader").delay(1000).fadeOut(1000);
                    });
                    </script>
        </div>


    <?php
       include_once("includes/header.php"); 
    ?>

<div class="contenedor">
<div class="cajaIzquierda">
        <fieldset>
            <a class="twitter-timeline" data-lang="es" data-theme="dark" data-link-color="#2B7BB9" href="https://twitter.com/hardwaremedia_?ref_src=twsrc%5Etfw">Tweets de @hardwaremedia_</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </fieldset>  
</div>       
<div class="cajaCentral">
<main>
    <fieldset>
        <div class="titulo">INICIO</div>
        <div class="Noticia1">
            <img class="imagenLogoNoticia1" src="images/logo.jpg">
            <br>
            Bienvenidos a HardwareMedia, empresa del Sector Informático.<br>
            <br>
            Aquí mostramos un resumen de todos los sevicios que le ofrecemos:<br>
    
        <div class="iconos">
        <a href="montaje.php"><img class="imagen3pequeña" src="images/montaje.png"></a>
        <a href="mantenimiento.php"><img class="imagen3" src="images/mantenimiento.png"></a>
        <a href="proyectos.php"><img class="imagen3pequeña2" src="images/proyectos.png"></a>
        <a href="asesoramiento.php"><img class="imagen3" src="images/asesoramiento.png"></a>
        <a href="modding.php"><img class="imagen3pequeña" src="images/modding.png"></a>
        </div>    
            ¿Quiére conocernos un poco más? <a href="nosotros.php">click aquí</a>.<br>
            <br>
            ¿Desea contactar con nosotros? <a href="contactanos.php">click aquí</a>.<br>
            <br>
            Echele un vistazo a nuestra <a href="tienda.php">Tienda</a>.<br>
            <br>
            Conozca nuestras noticias de <a href="hardware.php">Hardware</a> y <a href="juegos.php">Videojuegos</a><br>
            <br><br>
            <img class="imagen2" src="images/imagenNosotros.jpg"><br>
            <img class="contadorVisitas" src="https://counter9.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=rmnq2q8qbh3441dhct2jqemhdxbd11yw" border="0" alt="contador de visitas"><br>
            
        </div>
    </fieldset>    
</main>
</div>
</div>

</body>
</html>