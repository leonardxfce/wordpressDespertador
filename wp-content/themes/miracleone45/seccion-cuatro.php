
<div class="cuartaseccion">
    <div class="cuarta-1">
       
        <h2>Tierra Campesina -  <a style="color:brown; text-decoration:none;" href="<?php bloginfo('url');?>/category/radio/"> FM 89.1</a> </h2>
      
    </div>
    <div class="cuarta-2">
    <?php query_posts('posts_per_page=4&cat=817') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                <div class="texto-cuarta">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                <p><?php the_excerpt(); ?></p>
                </div>
                <div class="button-mas">
                    <a href="<?php the_permalink() ?>"><p>Leer Mas!</p></a>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    
    
</div>
<br>
   