<!doctype html>

<html lang="es">
<?php
header('Access-Control-Allow-Origin: *'); 
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/header.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/footer-distributed-with-contact-form.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/primera-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/palabrerio.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/segunda-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/tercera-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/cuarta-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/quinta-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/sexta-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/septima-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/publicidad-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/octava-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/novena-seccion.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/decima-seccion.css">
     <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/blog.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/seccion-facebook.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/laregionescuela.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/clima.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/single.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/category.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/footer.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/radiocategory.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/fav/favicon.ico" >
    <title><?php wp_title(); ?></title>
</head>
<body style="overflow: visible;">
    <header>
        <div class="seccion1">
            <ul class="footer-social">
                    <a href="https://www.facebook.com/PeriodicoElDespertador/" target="_blank" title="Haz clic ir a nuestra fan page">
                        <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                    </a>
                    <a href="https://twitter.com/Despertadorweb" target="_blank" title="Haz clic ir a nuestra fan page">
                        <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                    </a>
                    <a href="https://www.youtube.com/user/eldespertadordigital" target="_blank" title="Haz clic ir a nuestra fan page">
                        <li><i class="fa fa-youtube social-icon youtube" aria-hidden="true"></i></li>
                    </a>
                    <a href="https://plus.google.com/communities/112547996175719254738" target="_blank" title="Haz clic ir a nuestra fan page">
                        <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                    </a>
            </ul>
        
        </div>
        <div class="seccion2">
            <a href="http://despertadorlavalle.com.ar/">
                <img src="<?php bloginfo('template_url')?>/img/bannernuevo.png" alt="Despertador Online" >
            </a>
        </div>
        <div class="seccion3">
           
                <div class="container-weather">
                    <a href="http://despertadorlavalle.com.ar/clima/" style="text-decoration:none;"><div id="weather"></div></a>
                </div>

             <div class="container-fecha">
                <div class="widget-fecha">
                    <div class="wrap">
                        <div class="fecha">
                            <p id="diasemana" class="diasemana"></p>
                            <p id="dia" class="dia"></p>
                            <p>de </p>
                            <p id="mes" class="mes"></p>
                            <p>del </p>
                            <p id="year" class="year"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    
    <?php 
      //Obteniendo categorias para los links
      $locales = get_cat_ID('titulares');
      $locales_link = get_category_link ($locales); 
          
      $clasificados = get_cat_ID('clasificados');
      $clasificados_link = get_category_link($clasificados);
          
        $arte = get_cat_ID('arteyparte');
      $arte_link = get_category_link ($arte);       
    ?> 
    <nav>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu">&#9776;</label>
        <ul class="menu">
            <li><a href="<?php bloginfo('url');?>/category/titulares/" id="titulares">Titulares</a></li>
            <li><a href="<?php bloginfo('url');?>/category/arteyparte/" id="arte">Arte y Parte</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="<?php bloginfo('url');?>/category/laregion/" id="region">La Región</a></li>
            <li><a href="<?php bloginfo('url');?>/category/laregionhaceescuela/" id="escuela" >Escuela</a></li>
            <li><a href="<?php bloginfo('url');?>/category/clasificados/">Clasificados</a></li>
            <li><a href="#palabrerio" id="palabrerios">Palabreríos</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="<?php bloginfo('url');?>/category/deportes/" id="deportes">Deportes</a></li>
            <li><a href="<?php bloginfo('url');?>/category/tecnologia/" id="tecno" >Tecnología</a></li>
            <li><a href="<?php bloginfo('url');?>/category/deviaje/">De Viaje</a></li>
            <li><a  href="<?php bloginfo('url');?>/category/radio/" id="fm"> FM 89.1</a></li>
            
           
        </ul>
            <div class="search-box">
                <form  method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="text" class="search-txt" name="s" id="s" placeholder="<?php esc_attr_e('Buscar...', 'twentyeleven'); ?>" aria-label="Search" >
                    
                </form>
            </div>

            <div class="redes-sociales-header">
                <ul class="footer-social">
                        <a href="https://www.facebook.com/PeriodicoElDespertador/" target="_blank" title="Haz clic ir a nuestra fan page">
                            <li><i class="fa fa-facebook social-icon facebook" id="icon" aria-hidden="true"></i></li>
                        </a>
                        <a href="https://twitter.com/Despertadorweb" target="_blank" title="Haz clic ir a nuestra fan page">
                            <li><i class="fa fa-twitter social-icon twitter" id="icon" aria-hidden="true"></i></li>
                        </a>
                        
                </ul>
            </div>
    </div>
</nav>