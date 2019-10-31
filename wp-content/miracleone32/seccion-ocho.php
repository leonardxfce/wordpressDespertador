
<div class="palabrerio">
        <div class="titulo-palabrerios" >
            <h1>Palabreríos</h1>
        </div>
        <div class="contenido-palabrerio">
            <ul>
                <li>
                    <img src="https://image.ibb.co/du48Lc/JUAN.jpg" alt="Juan">
                    &nbsp;  &nbsp; 
                    <h1>Juan Burba</h1>
                       <?php
                            $authors_posts = get_posts( array(
                                'author' => 19,
                                'numberposts' => 1,
                                'category'         => '16',
                                'orderby' => 'date'
                            ) 
                        );
                        $post = $authors_posts[0];
                    ?>
                    
                   <a href="<?php the_permalink() ?>"> <h3><?php echo $post->post_title ?></h3></a>
                </li>
                <li>
                   <img src="https://image.ibb.co/gqWkJm/franco.jpg" alt="Franco">
                   &nbsp;  &nbsp;
                    <h1>GianFranco Ricciardi</h1>
                    
                    <?php
                            $authors_posts = get_posts( array(
                                'author' => 22,
                                'numberposts' => 1,
                                'category'         => '16',
                                'orderby' => 'date'
                            ) 
                        );
                   
                    
                        $post = $authors_posts[0];

                    ?>
                   <a href="<?php the_permalink() ?>"> <h1><?php echo $post->post_title ?></h1></a>
                </li>
                <li>
                    <img src="https://image.ibb.co/hMUfT7/unnamed.jpg" alt="">
                    &nbsp;  &nbsp;
                    <h1>Natalia Tomelin</h1>
                    <?php
                            $authors_posts = get_posts( array(
                                'author' => 20,
                                'numberposts' => 1,
                                'category'         => '16',
                                'orderby' => 'date'
                            ) 
                        );
                        $post = $authors_posts[0];
                    ?>
                   <a href="<?php the_permalink() ?>"> <h1><?php echo $post->post_title ?></h1></a>
                </li>
                <li> 
                    <img src="https://image.ibb.co/fiUTmH/fra.jpg" alt="Franco D'Amelio">
                    &nbsp;  &nbsp;
                    <h1>Franco D'Amelio</h1>
                    <?php
                            $authors_posts = get_posts( array(
                                'author' => 3,
                                'numberposts' => 1,
                                'category'         => '16',
                                'orderby' => 'date'
                            ) 
                        );
                        $post = $authors_posts[0];
                    ?>       
                   <a href="<?php the_permalink() ?>"> <h1><?php echo $post->post_title ?></h1></a>
                </li>
            </ul>
        </div>
    </div>
</div>
    <br>
    <div class="publicidad-titulo">
        <h2>Publicidad</h2>
    </div>
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
