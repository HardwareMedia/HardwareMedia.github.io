<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosotros - Hardware Media</title>
    <link rel="stylesheet" type="text/css" href="nosotros.css"></rel>
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
        <div class="titulo">SOBRE NOSOTROS</div>
        <div class="Noticia1">
        <img class="imagenLogoNoticia1" src="images/logo.jpg"
                alt="HardwareMedia">
                <br>
           Somos un Equipo emprendedor de sevilla capital.<br>
           <br>
            Aquí en HardwareMedia queremos ayudaros en todo lo posible, desde 
            <a href="asesoramiento.php">asesoraros</a> sobre cualquier tema dentro de los PCs, 
            realizar un <a href="mantenimiento.php">mantenimiento</a>, un <a href="montaje.php">montaje</a> o un proyecto aún más especial como un <a href="modding.php">modding</a> 
            en su torre.<br>
            <br>
            Podrán contar con nosotros para poder llevar a cabo sus ideas.<br>
            <br> 
            Nuestro radio de entrega/recogida es el siguiente:<br> 
            
            <a href="file:///C:/GitHub/HardwareMedia.github.io/images/radioEntrega.jpg" target="_blank"><img class="imagenNoticia1" src="images/radioEntrega.jpg"></a>
            
            Más allá de ese radio se encargaría una empresa externa o podriamos fijar un punto intermedio 
            dentro de este para recoger y entregar sus ordenadores o para hablar del montaje o modding que quieren 
            realizar en su torre.
            
        
        </div>
        


    </fieldset>
</main>
</div>














</body>
</html>