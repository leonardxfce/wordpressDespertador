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
                   <div class="texto-nota"> 
                    <a href="<?php the_permalink() ?>"><h2 class="post-<?php the_ID(); ?>" ><?php the_title(); ?></h2></a>
                    <p><?php the_excerpt(); ?></p>
                    <div class="sociales">
                        <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div> 
                   
                   </div>
                </li>   
        <?php endforeach; 
        wp_reset_postdata();?>
    </ul>
    <?php ad(); ?>
    </div>
</div>
<br><br>
<div class="publicidad-grande2" >
   
    <div class="publicidad-contenidoimg" >
        <a href="http://www.ipvmendoza.gov.ar/"><img  src="https://i.ibb.co/H72n0Zv/Banner-IPV-1200x400-Despertador.gif" border="0"></a>
    </div>
</div>

<!-- Fin mas noticias -->
