
<div class="octavaseccion">
    <div class="octava-1">
        <h2>Nuestros Proyectos Digitales</h2>
    </div>
    <div class="secciones-octava">
        <ul>
            <li>
                <div class="seccion-1">
                <div class="titulo">
                    <h2>Tierra Dentro</h2>
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
                    <h2>Alegorías</h2>
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
                    <h2>Negocios y Profesiones</h2>
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

