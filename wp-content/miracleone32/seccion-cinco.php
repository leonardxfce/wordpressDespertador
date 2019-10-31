
<div class="quintaseccion">
    <div class="medio">
    <div class="quinta1">
        <div class="quinta1-2">
            <h2>Servicios</h2>
        </div>
        <div class="quinta1-3">
            <?php query_posts('posts_per_page=6&cat=819') ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2  class="post-<?php the_ID(); ?>"><?php the_title(); ?></h2></a>
                    
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>    
      
    <div class="quinta2">
        <div class="quinta2-1">
            <h2>Redes Sociales</h2>
        </div>
        <div class="flex">
            <div class="quinta2-2">
                <div id="fb-root"></div>
                <div class="fb-page" data-href="https://www.facebook.com/PeriodicoElDespertador/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/PeriodicoElDespertador/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PeriodicoElDespertador/">Periódico El Despertador</a></blockquote></div>
                <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0&appId=173602370082253&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                </div>
            
            <div class="quinta2-3">
                <a class="twitter-timeline" data-lang="es" data-width="300" data-height="520" data-link-color="#19CF86" href="https://twitter.com/PDespertador?ref_src=twsrc%5Etfw">Tweets by PDespertador</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
            </div>
            
        </div>
    </div>
</div>
