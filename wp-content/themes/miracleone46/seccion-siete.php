
<div class="septimaseccion">
    <div class="septima-1">
        <h2>Deportes</h2>
        <hr>
    </div>
    <br>
    <div class="septima1-2">
            <?php query_posts('posts_per_page=6&cat=4') ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    <div class="texto-deportes">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                        <div class="autor">
                        <p>Escrito por: <?php the_author(); ?></p>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
</div>