<br>
<div class="sextaseccion">
    <div class="sexta-1">
        <h2>La Región</h2>
    </div>
    <br>
    <div class="septima1-2">
            <?php query_posts('posts_per_page=5&cat=21') ?>
            <ul>
            <li id="publicidad-post"><a href="https://twitter.com/afernandezk"><img src="https://i.ibb.co/9wdNLZX/anabel-cfk.jpg" alt=""></a></li>

                <?php while (have_posts()) : the_post(); ?>
                <li>
                    
                        <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                        <div class="contenido">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h3></a>
                            
                            <div class="autor">
                            <p>Escrito por: <?php the_author(); ?></p>
                            </div>
                        </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    
</div>
<br>
<div class="publicidad-grande2" >
    
    <div class="publicidad-contenidoimg" >
        <a href="http://sute.com.ar/"><img  src="https://i.ibb.co/zFgKqfd/sute.jpg" border="0"></a>
    </div>
</div>