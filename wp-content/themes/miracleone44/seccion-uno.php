


<div class="primeraseccion">
        <?php query_posts('posts_per_page=1&cat=14') ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <div class="primera-1">
            <div class="img">
                <a href="<?php the_permalink() ?>"  rel="bookmark" title="<?php the_title(); ?>">
                    <?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => ''));}?>
                </a>
            </div>
        </div>
        <div class="primera-2">
            <div class="contenido-primera-2">
            <?php
                    foreach((get_the_category()) as $category) { 
                        echo '<h2 id="category" style="color:#A42323;"> ' .$category->cat_name . '</h2> '; 
                    } 
                    ?> 
            <a href="<?php the_permalink() ?>"  rel="bookmark" title="<?php the_title(); ?>">
                <h1 class="post-<?php the_ID(); ?>" style="font-size:2em;"><?php the_title(); ?></h1>  
            </a>
            <a href="<?php the_permalink() ?> " style="color:#707070; "><p><?php the_excerpt(); ?></p></a>
            <div class="categoria-author">
                <h5> <small>  &nbsp;  Hace  </small> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?></h5>
         
            </div>
            
            </div>
        </div>

        <?php endwhile; ?>
        <div class="primera-3">
        <a target="_blank" href="http://www.sute.com.ar/jornadas-sobre-reformas-educativas-que-proponemos-desde-las-escuelas/"><img src="https://i.ibb.co/N7Y2QBr/Whats-App-Image-2019-05-24-at-00-21-30.jpg" alt="gu-a-comercial" border="0"></a>
        </div>
</div>
<div class="publicidad-grande2" >
  <br>
    
</div>