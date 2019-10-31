
<!-- Arte y Parte -->

<div class="terceraseccion">
    <div class="tercera-1">
        <br>
        <h2>Arte y Parte</h2>
        <hr>
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
                <div class="button-mas">
                    <a href="<?php the_permalink() ?>"><p>Leer Mas!</p></a>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
        <div class="publicidad-arte">
            <?php ad1(); ?>
        </div>
    </div>
    
</div>
<div class="publicidad-grande2" >
    
    <div class="contenido-publicitario">
        <ul>
                <li><a href="https://twitter.com/afernandezk"><img src="https://i.ibb.co/9wdNLZX/anabel-cfk.jpg" alt=""></a></li>
                <li><a href="https://www.triunfoseguros.co/"><img src="https://preview.ibb.co/cCwAAV/el-despertador-monta-a.jpg" alt=""></a></li>
            <li><a href="https://www.renatre.org.ar/"><img src="https://i.ibb.co/Mp7JpLN/renate.jpg" alt=""></a></li>
        </ul>
    </div>
</div>