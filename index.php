<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Las Salinas</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="//use.typekit.net/jnr4qqs.js"></script>
      <script>try{Typekit.load();}catch(e){}</script>
  </head>
  <body class="index">
  	<?php /*?><div class="pixeles"></div><?php */?>
  	<header id="index" class="no-column">
         <span class="gota"></span>
         <div class="container">
             <div class="col-lg-3 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 logotipo">
                 <a href="./"><img src="img/las-salinas-logo.png" title="Las Salinas" /></a>
             </div>
             <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-7 col-sm-12 col-xs-12">

                <a class="toggleMenu" href="#">Menu <i class="fa fa-bars"></i></a>
                <ul id="nav-menu">
                    <li  class="test">
                        <a href="#">La Empresa</a>
                        <ul>
                            <li><a href="mision-vision.php">Misión / Visión</a></li>
                            <li><a href="equipo.php">Equipo</a></li>
                            <li><a href="historia.php">Historia</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Proyecto</a>
                        <ul>
                            <li><a href="plan-maestro.php">Plan Maestro</a></li>
                            <li><a href="medioambiente.php">Tema ambiental</a></li>
                            <li><a href="comunidad.php">Comunidades</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>

            </div>
        </div>
        <div class="clearfix"></div>
    </header>
        <div id="slider-home" class="flexslider fwidth fleft">
            <?php /*?><span class="hoja ocultar animated"></span><?php */?>        
            <ul class="slides">
            
                <li style="background:url(img/img-slide-1-2.jpg) center center no-repeat; webkit-background-size:cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                	<div class="table">
                    	<div class="table-cell">
                        	<div class="h1 blanco">
                        		<h1>Dialogando con Viña y su gente</h1>
                            </div>
                            <p>Inmobiliaria Las Salinas fomenta el diálogo colaborativo con las comunidades vecinas al terreno, las autoridades de la comuna y diversos expertos en urbanismo y la historia de Viña del Mar</p>
                        </div>
                    </div>
               	</li>
                
                <li style="background:url(img/img-slide-1-2.jpg) center center no-repeat; webkit-background-size:cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                	<div class="table">
                    	<div class="table-cell">
                        	<div class="h1 blanco">
                        		<h1>Primer barrio sustentable certificado de Chile</h1>
                            </div>
                            <p>Inmobiliaria Las Salinas está estudiando experiencias internacionales y definiendo los estándares para la certificación medioambiental del proyecto.</p>
                        </div>
                    </div>
               	</li>
                
                <li style="background:url(img/img-slide-1-2.jpg) center center no-repeat; webkit-background-size:cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                	<div class="table">
                    	<div class="table-cell">
                        	<div class="h1 blanco">
                        		<h1>Contribuyendo al desarrollo de viña del mar</h1>
                            </div>
                            <p>El proyecto urbanístico de inmobiliaria Las Salinas contribuirá con valor social, medioambiental y económico a la ciudad Jardín.</p>
                        </div>
                    </div>
               	</li>
                
                
                <?php /*?><li><img src="img/img-slide-2.jpg" /></li>
                <li><img src="img/img-slide-3.jpg" /></li><?php */?>
            </ul>
        </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script defer src="js/jquery.flexslider.js"></script>
    <script defer src="js/jquery.insetBorderEffect.js"></script>
	<script src="js/scripts.js"></script>
  </body>
</html>