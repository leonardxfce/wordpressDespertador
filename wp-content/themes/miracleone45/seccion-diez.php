



<div class="laregionhaceescuela">

    <div class="titulo-regionescuela">

        <h2>La región hace escuela</h2>

        <hr>
    </div>
    <div class="contenido-regionescuela">

        <?php query_posts('posts_per_page=4&cat=769') ?>

        <ul>

            <?php while (have_posts()) : the_post(); ?>

            <li>

              

               <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>

               <div class="texto"> 

               <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>

              
               </div>

            </li>

            <?php endwhile; ?>

        </ul>

    </div>

</div>