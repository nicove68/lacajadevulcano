<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="Nicolás, Valerga, portfolio, 3d, modelado, animación, caja, de, vulcano">
<meta name="description" content="La Caja de Vulcano es el portfolio personal de modelado y animación 3d de Nicolás Valerga">
<meta name="Author" content="La Caja de Vulcano - Nicolás Valerga">
<meta name="Language" content="Spanish">
<title>La caja de Vulcano - Simon</title>
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
  <h1>Sim&oacute;n en una gran expedici&oacute;n - Corto Animado</h1>
    <p>Sim&oacute;n es un gnomo del bosque, que por cierto, es muy simp&aacute;tico! El modelado del personaje fue primero a mano alzada sobre papel, despu&eacute;s pasamos por el escaner y luego a Photoshop a editar las vistas para poder modelarlo en el Max. Algunas herramientas que use en la etapa del modelado de Sim&oacute;n fueron: editable poly, turbosmoth, symmetry, physique, morpher entre otras.<BR/><BR/>La historia tambi&eacute;n fue plasmada en papel por medio de un storyboard. Realic&eacute; varias escenas para detallar un poco mejor la acci&oacute;n del personaje. Utilic&eacute; el sistema de part&iacute;culas para el humo de la casa y efectos de luz para el farol o en la estrella.<BR/><BR/>El sonido fue tratado por separado y montado junto con los renders finales de las escenas en After Effects. A continuaci&oacute;n pueden ver la animaci&oacute;n final y algunos renders sueltos.</p>
    <BR/><BR/>
    <div id="cont_video">
    	<div id="marco_video">
			<a href="../videos/simon.flv" style="display:block;width:500px;height:400px;" id="player"></a>
          <script>
                            flowplayer("player", "../flow_player/flowplayer-3.2.5.swf",  { 
                                clip: { 
                                    autoPlay: false,  
                                    autoBuffering: true // <- ahi va sin coma   
                                } 
                            });
                        </script>
       </div>
       <div id="caps_video"><img src="../images/simon/caps.png" width="180" height="410" border="0" /></div>
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
