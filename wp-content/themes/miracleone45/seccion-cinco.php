
<div class="quintaseccion">
    <div class="medio">
    <div class="quinta1">
        <div class="quinta1-2">
            <h2>Servicios</h2>
            <hr>
        </div>
        <div class="quinta1-3">
            <?php query_posts('posts_per_page=6&cat=819') ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                   <div class="servicio animated bounce ">
                        <a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><p class="post-<?php the_ID(); ?>"><?php the_title(); ?></p></a>
                   </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>    
      <script>
          
      </script>
    <br>
</div>

<div class="quintaseccion">

<br>
</div>
<div class="quinta2">
        <div class="quinta2-1">
            <h2>Seguinos en nuestras redes!</h2>
            <hr>
        </div>
        <br>
        <div class="flex">
            <div class="quinta2-2">
                <h3>#Facebook</h3>
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
                <h3>#Twitter</h3>
                <a class="twitter-timeline" data-lang="es" data-width="320" data-height="500" data-link-color="#19CF86" href="https://twitter.com/PDespertador?ref_src=twsrc%5Etfw">Tweets by PDespertador</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
            </div>

           
                <br>
                <br> <br>
        </div>
    </div>