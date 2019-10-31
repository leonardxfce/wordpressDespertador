
<br>
<div class="laregionhaceescuela">
    <div class="titulo-tecnologia" style="background-color:#666;color:white;">
        <h2>Tecnología</h2>
    </div>
    <div class="contenido-regionescuela">
        <?php query_posts('posts_per_page=4&cat=572') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
              
               <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
               <div class="texto"> 
               <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h3 class="post-<?php the_ID(); ?>"><?php the_title(); ?></h3></a>
                <div class="sociales">
                    <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div> 
               </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>