<br>
<div class="seccion-19">
    <div class="titulo-seccion19">
        <h2>Negocios y empresas</h2>
        <hr>
    </div>

    <div class="negocios-empresas">
        <?php query_posts('posts_per_page=4&cat=827') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <div class="container-imagen">
                    <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                </div>
                <br>
                <div class="container-titulo">
                    
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h3></a>
                    <div class="autor">
                       <p>Escrito por: <?php the_author(); ?></p>
                    </div>
                    
                </div>
                <br>
                

            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>