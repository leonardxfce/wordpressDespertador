
<div class="cuartaseccion">
    <div class="cuarta-1">
        <h2>Tierra Campesina - FM 89.1</h2>
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
                <small style="color:white !important;">Por: <span style="color:white; font-size:16px;"><?php the_author(); ?></span></small>
                <div class="sociales">
                        <a href="http://www.twitter.com/home?status=<?php the_permalink() ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div> 
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    
    
</div>
<br>
        
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
        style="display:block; text-align:center;"
        data-ad-layout="in-article"
        data-ad-format="fluid"
        data-ad-client="ca-pub-7650734446017232"
        data-ad-slot="1919626491"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
