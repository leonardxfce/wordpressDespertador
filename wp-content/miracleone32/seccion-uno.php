
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
            
            <a href="<?php the_permalink() ?>"  rel="bookmark" title="<?php the_title(); ?>">
                <h1 class="post-<?php the_ID(); ?>" ><?php the_title(); ?></h1>  
            </a>
            <a href="<?php the_permalink() ?> " style="color:#707070; "><p><?php the_excerpt(); ?></p></a>
            <div class="categoria-author">
            <ul style="display:inline-flex;">
                <li>
                    <?php
                    foreach((get_the_category()) as $category) { 
                        echo '<h5 id="category" style="color:rgb(28, 95, 184);"> ' .$category->cat_name . '</h5> '; 
                    } 
                    ?> 
                </li>
                <li><h5> <small> &nbsp;  |  Por </small><?php the_author();?></h5></li>
                <li><h5> <small>  &nbsp;  Hace  </small> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?></h5></li>
                
            </ul>
            </div>
            
            </div>
        </div>

        <?php endwhile; ?>
        <div class="primera-3">
        <a href="https://www.facebook.com/oasisnorte"><img src="https://i.ibb.co/yPCn6kQ/54277961-853259958344193-5655207344431169536-n.jpg" alt="gu-a-comercial" border="0"></a>
        </div>
</div>
<div class="publicidad-grande2" >
  <br><br>
    <div class="publicidad-contenidoimg" >
        <a href="http://sute.com.ar/"><img  src="https://i.ibb.co/zFgKqfd/sute.jpg" border="0"></a>
    </div>
</div>