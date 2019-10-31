<?php get_header(); ?>

<div id="primary">
    <div id="content" role="main">
        <div class="categorias">
        <h1 id="categoriamain">Busqueda encontrada con la o las palabras: <?php echo get_search_query(); ?></h1>
    <?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array( 's' => get_search_query(), 'posts_per_page' => 15,'paged' => $paged);
    $myposts = new WP_Query($args);
    while ($myposts->have_posts()) : $myposts->the_post();
    ?>
    <div class="noticia-categoria">
                <div id="titulo">
                    <h2 class="tituloCategorizado"><a style="color:black" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title();?></a></h2>
                </div>
                <small> Publicado el: <?php the_time('d M Y'); ?> </small>
                <div id="contenido-noticia">
        <?php the_excerpt(); ?>
                </div>
    </div>    
    <?php endwhile; // end of the loop.?>
        <div class="pagination">
            <div class="nav-previous alignleft"><?php next_posts_link('< Noticias Anteriores'); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link('Noticias mas Recientes >'); ?></div>
        </div>
    </div>
    
    

<?php get_footer(); ?>