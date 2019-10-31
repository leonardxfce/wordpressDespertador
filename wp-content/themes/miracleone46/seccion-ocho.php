
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
