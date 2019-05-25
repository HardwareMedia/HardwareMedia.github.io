<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenimiento - Hardware Media</title>
    <link rel="stylesheet" type="text/css" href="mantenimiento.css"></rel>
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
        <div class="titulo">MANTENIMIENTO</div>

        <div class="Noticia1">
            <br>
            <div class="subtitulo">Índice</div>
            <ul class="indice">
                <li><a class="indicea" href="#Limpieza">Limpieza Completa</a></li>
                <li><a class="indicea" href="#Actualizacion">Actualización De Componentes</a></li>
            </ul> 
        </div>

        <a name="Limpieza" style="visibility: hidden;">1</a>
         <div class="Noticia1">
                <div class="subtitulo">Limpieza Completa</div>
       
            Desmontamos su pc o portatil y lo limpiamos pieza a pieza, 
            luego lo volvemos a montar y lo dejamos como lo tenia al principio para que usted 
            vea como mejoran tanto su aspecto como su rendimiento.
            <br><br>
            En numerosas ocasiones el rendimiento de su ordenador se ve afectado 
            por la suciedad acumulada o por la cantidad de programas instalados en él.<br><br> En la siguiente imagen mostramos un ejemplo
            de como quedaría su ordenador antes y despues de ser limpiado:<br>
            
            <div class="imagenLogoNoticia1"><img src="images/antes1.jpg" alt="antes"><span class="textoImagen">ANTES</span>
            <img src="images/despues1.jpg" alt="despues"><span class="textoImagen">DESPUES</span></div> 
            <br>
            Para que dejemos su ordenador como nuevo <span style="color:darkred; font-weight: bold;">por 
            solo 20€</span> contacte con nosotros <a href="contactanos.php">clicando aquí</a>.
        </div>

        <a name="Actualizacion" style="visibility: hidden;">1</a>
        <div class="Noticia1">
            <div class="subtitulo">Actualización De Componentes</div>

        Actualizamos las partes que necesite de su ordenador, comprando las piezas necesarias, encargandonos del montaje y
        se lo entregamos con todo instalado y preparado para su uso.<br>
        <br>
        Pese a que nosotros nos encarguemos de todo, <span style="color:darkred; 
        font-weight: bold;">usted tendrá que pagar el importe de las piezas que pidamos más unos 15€ que 
        variarán dependiendo de la mano de obra necesaria</span>. Con la actualización de componentes viene incluida una limpieza completa gratis<br>
        <br> 
        Ponemos de ejemplo un portátil al que le cambiamos la ssd, ram y el teclado, le realizamos un formateo y limpieza completos y arreglamos todos los desperfectos:<br>
        <div class="imagenLogoNoticia1"><img style="width: 100%;" src="images/ordenadorActualizado1.jpeg"></div><br>
        Para que realizemos una actualización de su ordenador (no mas de un 30% de los componentes de su PC o portátil) solo contacte con nosotros <a href="contactanos.php">clicando aquí</a>.<br>
        <br>
        Si lo que necesita es una actualización de componentes más a fondo quizas debería pasarse 
        por nuestra sección de <a href="montaje.php">montaje</a>.



        </div> 


    </fieldset>
</main>
</div>

</body>
</html>