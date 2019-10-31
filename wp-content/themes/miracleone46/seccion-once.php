<br>
<div class="novena-seccion">
    <div class="titulo-novena">
        <h2>Clasificados</h2>
    </div>   
    <div class="secciones-novena">
        <ul>
            <li>
                <div class="seccion-1">
                <div class="titulo">
                    <h2>Articulos</h2>
                </div>
                <div class="contenido">
                <?php query_posts('posts_per_page=3&cat=794') ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="img4">
                   <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h3></a>
                    <hr>
                </div>
                <?php endwhile; ?> 
                </div>
                </div>
            </li>
            <li>
                <div class="seccion-2">
                <div class="titulo">
                    <h2>Automotores</h2>
                </div>
                <div class="contenido">
                    <?php query_posts('posts_per_page=3&cat=793') ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="img4">
                        <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h3></a>
                        <hr>
                    </div>
                <?php endwhile; ?> 
                </div>
                </div>
            </li>
            <li>
                <div class="seccion-2">
                <div class="titulo">
                    <h2>Inmuebles</h2>
                </div>
                <div class="contenido">
                    <?php query_posts('posts_per_page=3&cat=792') ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="img4">
                        <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h3></a>
                        <hr>
                    </div>
                <?php endwhile; ?> 
                </div>
                </div>
            </li>
            <li>
                <div class="seccion-3">
                <div class="titulo">
                    <h2>Servicios</h2>
                </div>

                <div class="contenido">

                    <?php query_posts('posts_per_page=3&cat=795') ?>

                    <?php while (have_posts()) : the_post(); ?>

                    <div class="img4">

                        <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>

                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h3></a>

                        <hr>

                    </div>

                </div>

                <?php endwhile; ?> 

                </div>

                </div>

            </li>

            

        </ul>

    </div>

</div>

<br>