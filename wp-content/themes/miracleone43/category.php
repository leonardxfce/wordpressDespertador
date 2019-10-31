<?php get_header(); ?>

<!--- Header descriptivo -->

<!--- Fin header descriptivo -->
<!-- Publicidad -->
<!-- Fin Publicidad -->
<!--comienzo single page -->
<div class="container-category">
    
    <div id="banner-categoria">
        <h1>
            <?php the_category(','); ?>
        </h1>
    </div>

    <ul class="galeria-category">
        <?php 
        if (have_posts()) {
            while (have_posts()) : the_post(); ?>                
            <li>
                <div class="imagen-category">
                    <a href=""><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                </div>
                <div class="contenido-category">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><h1><?php the_title(); ?> </h1></a>
            
                <small>  Publicado el: <?php the_time('d M Y'); ?> </small>
               
                <small><?php the_excerpt(); ?></small>
                </div>

            </li>
        <?php endwhile;}?>
    </ul>
</div>

<div class="paginacion">
        <div class="nav-previous alignleft">
            <?php next_posts_link('<button class="btn">Noticias Anteriores</button>'); ?>
        </div>
        <div class="nav-next alignright">
            <?php previous_posts_link('<button class="btn">Noticias mas Recientes </button>'); ?>
        </div>
</div>



<?php get_footer(); ?>
