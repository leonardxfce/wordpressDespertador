
<div class="blog-despertador">
    <div class="titulo-blog">
        <img src="<?php bloginfo('template_url')?>/img/logo-BLOG.png" alt="">
    </div>
    <br>
    <div class="contenido-blog">
        <?php query_posts('posts_per_page=6&cat=820') ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
            <li>
              
               <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                &nbsp;  &nbsp;
               <div class="texto"> 
               <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h1 class="post-<?php the_ID(); ?>"><?php the_title(); ?></h1></a>
                <h1> &nbsp;  Por <?php the_author();?> </h1>
               </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
