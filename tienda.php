<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda - Hardware Media</title>
    <link rel="stylesheet" type="text/css" href="tienda.css"></rel>
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
        <div class="titulo">TIENDA</div>
        <div class="Noticia1">
            Aquí encontrará algunos de los productos que ponemos a su disposición 
            junto con su precio.<br>
            <br>
            Puede comprar cualquiera de ellos a través de <a class="correo" href="contactanos.html">nuestro correo</a>.<br>
            <br>
            <br>   
            <div class="subtitulo">Índice</div>
            <ul class="indice">
                <li><a href="#Backplates">Backplates</a></li>
                <li><a href="#Carcasas">Diseños De Torre</a></li>
                <li><a href="#Volante">Simuladores De Conducción</a></li>
            </ul>  
        </div>
        <a name="Backplates" style="visibility: hidden;">1</a>
        <div class="Noticia1">
            <div class="subtitulo">Backplates</div>
            Los backplates son recubrimientos con diseño personalizado que se colocan 
            sobre la tarjeta gráfica para cubrirla.<br>
            <br>
            Al igual que con el resto de artículos, además de los ejemplos mostrados más abajo puede 
            contactar con nosotros para que diseñemos uno específico si lo desea.<br>
            <br>
            Al importe de los backplates se le añadirán los gastos de envío si se requieren.<br>
            <br>
            Algunos de los diseños que hemos realizado son:<br>
            <div class="imagenNoticia1">
                    <img src="images/backplateGoku.jpeg">
                    <p>BACKPLATE ARTÍSTICO: DRAGON BALL [15€]</p>
                </div>
            <div class="imagenNoticia1">
                    <img src="images/backplateGalaxia.jpeg">
                    <p>BACKPLATE ARTÍSTICO: GALAXIA [12€]</p>
                </div>  
            
            <div class="imagenNoticia1">
                <img src="images/backplateSamuel.jpeg">
                   <p>BACKPLATE ARTÍSTICO: TU NOMBRE + LOGO O ICONO [12€]</p>
            </div>

            <div class="imagenNoticia1">
                    <img src="images/BackplateVerde.jpg">
                    <p>BACKPLATE ARTÍSTICO: VERDE [4€]</p>
                </div>      
        </div>

        <a name="Carcasas" style="visibility: hidden;">1</a>
        <div class="Noticia1">
            <div class="subtitulo">Diseños De Tu Torre</div>
            Hacemos diseños personalizados a tu torre, puede ser un dibujo sobre ella o un diseño 
            en 3D algo más complejo.<br>
            <br>
            Para que realizemos el diseño que usted desee o uno como los que le mostramos a continuación, 
            deberá visitar nuestra pestaña de <a class="modding" href="modding.html">modding</a>.<br>
            <br>
            Algunos de los diseños que hemos realizado son:<br>
            <div class="imagenNoticia1">
                <img src="images/carcasaDragon.jpeg">
                <p>DISEÑO DE TORRE: EVANGELION [Modding Exterior e Interior]</p>
                </div>
            <div class="imagenNoticia1">
                <img src="images/carcasaHexagonos.jpeg">
                <p>DISEÑO SOBRE METACRILATO: HEXÁGONOS [Modding Exterior]</p>
                </div>
            <div class="imagenNoticia1">
                <img src="images/moddingGarra.jpg">
                <p>DISEÑO SOBRE TORRE: GARRA [Modding Exterior]</p>
                </div> 
                
            <div class="imagenNoticia1">
                <img src="images/eva1 (9).JPG">
                <p>DISEÑO DE TORRE: EVANGELION [Modding Exterior e Interior]</p>
                </div>    
            
            <div class="imagenNoticia1">
                <img src="images/vengadoresLuz.jpeg">
                <p>DISEÑO DE TORRE: LOS VENGADORES [Modding Exterior]</p>
                </div>

            <div class="imagenNoticia1">    
                <video controls loop muted src="videos/savage.mp4"></video>
                <p>DISEÑO DE TORRE: SAVAGE [Modding Brutal en Torre Antigua]</p>
            </div>
        
        </div> 
        
        <a name="Volante" style="visibility: hidden;">1</a>
        <div class="Noticia1">
            <div class="subtitulo">Simuladores De Conducción</div>
            <div class="imagenNoticia1">
                <img src="images/volante.jpeg">
                <p>CONDUCCIÓN: PUESTO COMPLETO [Precio Variable]</p>
            </div>
        </div>

    </fieldset>
</main>
</div>














</body>
</html>