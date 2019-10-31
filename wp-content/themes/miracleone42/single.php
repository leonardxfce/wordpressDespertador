<?php get_header();?>
<!--comienzo single -->

<div class="seccion-single">
    <!--Contenido-->
    <div class="single-category">
        <?php
            foreach((get_the_category()) as $category) { 
                echo '<h2 id="category" style="color:rgb(28, 95, 184);"> ' .$category->cat_name . '</h2> '; 
            } 
        ?>
        <hr>
        <?php 
        while (have_posts()) : the_post(); ?>
        <h3 style="color:rgb(26, 12, 1);"><?php echo get_the_date();  ?></h3>
        <?php endwhile; ?> 
    </div>

    <div class="single-1">
        <h1><?php the_title(); ?></h1>
        <div class="contenedor-facebook">
            <div class="fb-share-button" data-href="<?php get_permalink(); ?>" data-type="box_count"></div>
        </div>
        <?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => ''));}?>
        <div class="author-single">
        <ul>
            <li class="image-author"><?php  author_get(); ?></li>
            <li>
                <?php while (have_posts()) : the_post(); ?>
                    <h3> &nbsp;  Por <?php the_author();?> </h3>
                <?php endwhile; // end of the loop.?>
            </li>

            
        </ul>
        </div>
        
    </div>
    <div class="single-2">
        <div class="sociales-single" >
            <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp;&nbsp;
            <a href="https://www.facebook.com/dialog/?app_id=28218816837&channel_url=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;
            <a href="whatsapp://send?text=<?php echo get_permalink(); ?>" target="_blank" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a> &nbsp;&nbsp;
            <a href="mailto:?subject=<?php the_permalink() ?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a> &nbsp;&nbsp;
        </div> 
        <div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1&appId=173602370082253&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </div>
    <!--Nota de contenido -->
   <div class="contedor-noticiaypublicidad">
        <div class="single-3">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div >
                        <?php the_content(); ?>
                        
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="publicidad-costado">
            <ul>
                <li><a href="https://www.facebook.com/RRighii//"><img src="https://i.ibb.co/6tFjR6g/Dise-o.png" alt=""></a></li>
                <li><a href="https://twitter.com/afernandezk"><img src="https://i.ibb.co/9wdNLZX/anabel-cfk.jpg" alt=""></a></li>
                <li><a href="https://www.triunfoseguros.co/"><img src="https://preview.ibb.co/fW6hPq/el-despertador-urbano.jpg" alt=""></a></li>
            </ul>
        </div>
   </div>

    
    <div class="publicidad-titulo">
        <div class="imagen-publicidad">
            <img src="https://i.ibb.co/H72n0Zv/Banner-IPV-1200x400-Despertador.gif" alt="">
        </div>
    
    </div>
    
        

    <div class="single-4">
        <h2>Comentarios</h2>
        <div class="fb-comments"data-width="100%"  data-href="<?php echo get_the_permalink(); ?>" data-numposts="10" data-colorscheme="light"></div>
    </div>
   
</div>

<div class="relacionadas">
    <div class="titulo-relacionadas">
        <h1 style="text-align: center;">Relacionadas</h1>
    </div>
    <div class="contenido-relacionadas">
        <ul>
            <?php
                $category = get_the_category();
                $ct=$category[0]->cat_name;
                $args = array( 'numberposts' => '6','post_status' => 'publish','category' => get_cat_ID($ct));
                $recent_posts = wp_get_recent_posts($args);
                    foreach ($recent_posts as $recent) {
                        echo '<li>'.'<a href="' . get_permalink($recent["ID"]) . '">' . get_the_post_thumbnail($recent["ID"], '');
                        echo '<p>'.$recent["post_title"].' </p> </a> ';
                        echo '<p>'.$recent["the_excerpt"].' </p></li> ';
                    }       
            ?>
        </ul>
    </div>
</div>




    <!--Fin aside -->

    <!-- Comentarios de facebook -->
    <div id="fb-root"></div>
   
</div>
<!--  Fin Comentarios de facebook -->


<?php get_footer();?>
