<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="Nicolás, Valerga, portfolio, 3d, modelado, animación, caja, de, vulcano">
<meta name="description" content="La Caja de Vulcano es el portfolio personal de modelado y animación 3d de Nicolás Valerga">
<meta name="Author" content="La Caja de Vulcano - Nicolás Valerga">
<meta name="Language" content="Spanish">
<title>La caja de Vulcano - Pokeboy</title>
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />

<!-- FAVICON -->
<link rel="shortcut icon" href="/favicon.ico">

</head>

<script type="text/javascript" src="../js/jquery1.4.2.js"></script>
<script type="text/javascript" src="../js/jquery_cross_slide.js"></script>
<script type="text/javascript" src="../js/marquesina.js"></script>
<script type="text/javascript" src="../js/flowplayer-3.2.4.min.js"></script>

<body>

<?php include ('../includes/header.html'); ?>

<!-- CONTENT -->
<div id="cont_central">
<p align="right"><a href="../home.php">&lt;&lt;&lt; Volver a la Home</a></p>
  <h1>Pokeboy Color - Modelado de producto</h1>
    <p>Una de las consolas port&aacute;tiles que en su momento hizo furor fue el Gameboy Color. En esta ocasi&oacute;n cambi&eacute; un poco la tem&aacute;tica e invent&eacute; una versi&oacute;n nueva, ligada al mundo Pokemon. La versi&oacute;n de este Pokeboy Color es Charizard, una especie de drag&oacute;n-pokemon de fuego. Tiene accesorios nuevos, como los parlantes en el frente, y algunos detalles difieren de la versi&oacute;n original.<BR/><BR/>Est&aacute; todo modelado en 3d Max, la carcasa es un poly entero y los accesorios fueron modelados aparte. La animaci&oacute;n es b&aacute;sica, simplemente es una muestra del producto. Para renderizar y obtener resultados mas realistas utilic&eacute; V-ray. Pueden ver el video completo  de este remake del Gameboy Color.</p>
  <BR/><BR/>
    <div id="cont_video">
    	<div id="marco_video">
			<a href="../videos/pokeboy.flv" style="display:block;width:500px;height:400px;" id="player"></a>
          <script>
                            flowplayer("player", "../flow_player/flowplayer-3.2.5.swf",  { 
                                clip: { 
                                    autoPlay: false,  
                                    autoBuffering: true // <- ahi va sin coma   
                                } 
                            });
                        </script>
       </div>
       <div id="caps_video"><img src="../images/pokeboy/caps.png" width="180" height="410" border="0" /></div>
	</div>
    <div class="clear"></div>

   
    
  <BR/>

    
  <p align="center"><a href="../home.php">Volver a la Home</a></p>
	<BR/>
    <div class="clear"></div>

</div>

<?php include ('../includes/footer.html'); ?>

</body>
</html>
