<?php get_header();?>


<div class="primeraseccion">
        <?php query_posts('posts_per_page=1&cat=14') ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <div class="primera-1">
            <div class="img">
                <?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => ''));}?>
            </div>
        </div>
        <div class="primera-2">
            <div class="contenido-primera-2">
            
            <a href="<?php the_permalink() ?>"  rel="bookmark" title="<?php the_title(); ?>">
                <h1 class="post-<?php the_ID(); ?>" ><?php the_title(); ?></h1>  
            </a>
            <a href="<?php the_permalink() ?> " style="color:#707070; text-align:justify;"><p><?php the_excerpt(); ?></p></a>
            <div class="categoria-author">
            <ul style="display:inline-flex;">
                <li>
                    <?php
                    foreach((get_the_category()) as $category) { 
                        echo '<h5 id="category" style="color:rgb(28, 95, 184);"> ' .$category->cat_name . '</h5> '; 
                    } 
                    ?> 
                </li>
                <li><h5> <small> &nbsp;  |  Por </small><?php the_author();?></h5></li>
                <li><h5> <small>  &nbsp;  Hace  </small> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?></h5></li>
                
            </ul>
            </div>
            
            <div class="sociales" style="font-size:1.5em;text-align:center; margin:auto; width:100%;">
                <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
             </div> 
            </div>
        </div>
        <?php endwhile; ?>
</div>

<!-- Mas noticias -->

<div class="segundaseccion">
    <div class="segunda-1">
        <h2>Mas Noticias</h2>
    </div>
    <div class="segunda-2">
    <ul>
        <?php
            global $post;
            $args = array( 'posts_per_page' => 6, 'offset'=> 1, 'category' => 14 );
            $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    <a href="<?php the_permalink() ?>"><h2 class="post-<?php the_ID(); ?>" ><?php the_title(); ?></h2></a>
                    <p><?php the_excerpt(); ?></p>
                    <div class="sociales">
                        <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div> 
                </li>   
        <?php endforeach; 
        wp_reset_postdata();?>
    </ul>
    <?php ad(); ?>
    </div>
</div>

<!-- Fin mas noticias -->


<!-- Arte y Parte -->

<div class="terceraseccion">
    <div class="tercera-1">
        <h2>Arte y Parte</h2>
    </div>
    <div class="tercera-2">
    <?php query_posts('posts_per_page=3&cat=700') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <div class="img-tercera">
                <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                </div>
                <div class="titulo-tercera">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                </div>
                <p><?php the_excerpt(); ?></p>
                <small style="color:white !important;" id="author-tercera">Por: <span style="color:white; font-size:16px;"><?php the_author(); ?></span></small>
                <div class="sociales">
                        <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div> 
            </li>
            <?php endwhile; ?>
        </ul>
        <?php ad1(); ?>
    </div>
    
</div>


<div class="cuartaseccion">
    <div class="cuarta-1">
        <h2>Tierra Campesina - FM 89.1</h2>
    </div>
    <div class="cuarta-2">
    <?php query_posts('posts_per_page=4&cat=817') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                <p><?php the_excerpt(); ?></p>
                <small style="color:white !important;">Por: <span style="color:white; font-size:16px;"><?php the_author(); ?></span></small>
                <div class="sociales">
                        <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div> 
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    
    
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-7650734446017232"
     data-ad-slot="1919626491"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div class="quintaseccion">
    <div class="medio">
    <div class="quinta1">
        <div class="quinta1-2">
            <h2>Servicios</h2>
        </div>
        <div class="quinta1-3">
            <?php query_posts('posts_per_page=6&cat=819') ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                    
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>    
      
    <div class="quinta2">
        <div class="quinta2-1">
            <h2>Redes Sociales</h2>
        </div>
        <div class="flex">
            <div class="quinta2-2">
                <div id="fb-root"></div>
                <div class="fb-page" data-href="https://www.facebook.com/PeriodicoElDespertador/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/PeriodicoElDespertador/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PeriodicoElDespertador/">Periódico El Despertador</a></blockquote></div>
                <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0&appId=173602370082253&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                </div>
            
            <div class="quinta2-3">
                <a class="twitter-timeline" data-lang="es" data-width="300" data-height="520" data-link-color="#19CF86" href="https://twitter.com/PDespertador?ref_src=twsrc%5Etfw">Tweets by PDespertador</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
            </div>
            
        </div>
    </div>
</div>
<?php dynamic_sidebar( 'sidebar-1' ); ?>


<div class="sextaseccion">
    <div class="sexta-1">
        <h2>LA REGIÓN</h2>
    </div>
    <div class="septima1-2">
            <?php query_posts('posts_per_page=6&cat=21') ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                    <div class="sociales">
                        <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div> 
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-7650734446017232"
     data-ad-slot="1919626491"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div class="septimaseccion">
    <div class="septima-1">
        <h2>Deportes</h2>
    </div>
    <div class="septima1-2">
            <?php query_posts('posts_per_page=6&cat=4') ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                    <div class="sociales">
                        <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div> 
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
</div>

<div class="palabrerio">
        <div class="titulo-palabrerios" >
            <h1>Palabreríos</h1>
        </div>
        <div class="contenido-palabrerio">
            <ul>
                <li>
                    <img src="https://image.ibb.co/du48Lc/JUAN.jpg" alt="Juan">
                    &nbsp;  &nbsp; 
                    <h1>Juan Burba</h1>
                       <?php
                            $authors_posts = get_posts( array(
                                'author' => 19,
                                'numberposts' => 1,
                                'category'         => '16',
                                'orderby' => 'date'
                            ) 
                        );
                        $post = $authors_posts[0];
                    ?>
                    
                   <a href="<?php the_permalink() ?>"> <h3><?php echo $post->post_title ?></h3></a>
                </li>
                <li>
                   <img src="https://image.ibb.co/gqWkJm/franco.jpg" alt="Franco">
                   &nbsp;  &nbsp;
                    <h1>GianFranco Ricciardi</h1>
                    
                    <?php
                            $authors_posts = get_posts( array(
                                'author' => 22,
                                'numberposts' => 1,
                                'category'         => '16',
                                'orderby' => 'date'
                            ) 
                        );
                   
                    
                        $post = $authors_posts[0];

                    ?>
                   <a href="<?php the_permalink() ?>"> <h1><?php echo $post->post_title ?></h1></a>
                </li>
                <li>
                    <img src="https://image.ibb.co/hMUfT7/unnamed.jpg" alt="">
                    &nbsp;  &nbsp;
                    <h1>Natalia Tomelin</h1>
                    <?php
                            $authors_posts = get_posts( array(
                                'author' => 20,
                                'numberposts' => 1,
                                'category'         => '16',
                                'orderby' => 'date'
                            ) 
                        );
                        $post = $authors_posts[0];
                    ?>
                   <a href="<?php the_permalink() ?>"> <h1><?php echo $post->post_title ?></h1></a>
                </li>
                <li> 
                    <img src="https://image.ibb.co/fiUTmH/fra.jpg" alt="Franco D'Amelio">
                    &nbsp;  &nbsp;
                    <h1>Franco D'Amelio</h1>
                    <?php
                            $authors_posts = get_posts( array(
                                'author' => 3,
                                'numberposts' => 1,
                                'category'         => '16',
                                'orderby' => 'date'
                            ) 
                        );
                        $post = $authors_posts[0];
                    ?>       
                   <a href="<?php the_permalink() ?>"> <h1><?php echo $post->post_title ?></h1></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-7650734446017232"
     data-ad-slot="1919626491"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div class="octavaseccion">
    <div class="octava-1">
        <h2>Nuestros Proyectos Digitales</h2>
    </div>
    <div class="secciones-octava">
        <ul>
            <li>
                <div class="seccion-1">
                <div class="titulo">
                    <h2>TIERRA DENTRO</h2>
                </div>
                <div class="contenido">
                <?php query_posts('posts_per_page=1&cat=765') ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="img4">
                    <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                </div>
                <?php endwhile; ?> 
                </div>
                </div>
            </li>
            <li>
                <div class="seccion-2">
                <div class="titulo">
                    <h2>ALEGORÍAS</h2>
                </div>
                <div class="contenido">
                    <?php query_posts('posts_per_page=1&cat=766') ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="img4">
                        <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    </div>
                <?php endwhile; ?> 
                </div>
                </div>

            </li>
            <li>
                <div class="seccion-3">
                <div class="titulo">
                    <h2>NEGOCIOS Y PROFESIONES</h2>
                </div>
                <div class="contenido">
                    <?php query_posts('posts_per_page=1&cat=767') ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="img4">
                        <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    </div>
                </div>
                <?php endwhile; ?> 
                </div>
                </div>
            </li>
        </ul>
    </div>
</div>



<div class="laregionhaceescuela">
    <div class="titulo-regionescuela">
        <h2>La Región Hace Escuela</h2>
    </div>
    <div class="contenido-regionescuela">
        <?php query_posts('posts_per_page=4&cat=769') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
              
               <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
               <div class="texto"> 
               <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                <div class="sociales">
                    <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div> 
               </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
        
<div class="novena-seccion">
    <div class="titulo-novena">
        <h2>Clasificados</h2>
    </div>
    <div class="contenido-productos">
    <?php query_posts('posts_per_page=4&cat=796') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                <div class="texto"> 
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                <div class="sociales">
                    <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div> 
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    
</div>
<br>
<div class="blog-despertador">
    <div class="titulo-blog">
        <img src="<?php bloginfo('template_url')?>/img/logo-BLOG.png" alt="">
    </div>
    <br>
    <div class="contenido-blog">
        <?php query_posts('posts_per_page=6&cat=820') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
              
               <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                &nbsp;  &nbsp;
               <div class="texto"> 
               <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h1 class="post-<?php the_ID(); ?>"><?php the_title(); ?></h1></a>
                <h1> &nbsp;  Por <?php the_author();?> </h1>
               </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>

<br>
<div class="laregionhaceescuela">
    <div class="titulo-tecnologia" style="background-color:#666;color:white;">
        <h2>Tecnología</h2>
    </div>
    <div class="contenido-regionescuela">
        <?php query_posts('posts_per_page=4&cat=572') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
              
               <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
               <div class="texto"> 
               <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3 class="post-<?php the_ID(); ?>"><?php the_title(); ?></h3></a>
                <div class="sociales">
                    <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div> 
               </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<div class="laregionhaceescuela">
    <div class="titulo-tecnologia" style="background-color:#fcb501;color:white;">
        <h2>De viaje por el mundo</h2>
    </div>
    <div class="contenido-regionescuela">
        <?php query_posts('posts_per_page=4&cat=760') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
              
               <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
               <div class="texto"> 
               <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                <div class="sociales">
                    <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div> 
               </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<br>
<div class="decima-seccion">
    <div class="titulo-decima">
        <h1>DESPERTADOR VIDEOS</h1>
    </div>
    <div class="youtube-channel">
        <?php videos();?>
    </div>
</div>
<br>

<div class="seccion-facebook" >
    <div class="titulo-facebook" > 
        <h1>Facebook</h1>
    </div>
    <div class="videos">
        <div class="fb-video" data-href="<?php videosfacebook(); ?>">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="<?php videosfacebook(); ?>"></blockquote>
            </div>
        </div>
    </div>
    <br>
</div>

<?php get_footer(); ?>