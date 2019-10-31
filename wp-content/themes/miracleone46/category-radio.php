<?php get_header(); ?>
<div class="radio-category">
    
    <div class="contenido-live">
        <img src="<?php bloginfo('template_url')?>/img/tierracampesina.jpg" alt="" style="display:block; margin:auto;width:200px; ">
        <p class="title" style="font-family: 'Raleway', sans-serif; color:gray;"> Nuestra Radio Online</p>
        <iframe src="http://comecuco.org:8000/TierraCampesina" frameborder="0" style="height:20px;"></iframe>
    </div>
    <br>
    <h1 class="title" style="font-family: 'Raleway', sans-serif; color:gray;">Nuestras Ultimas Notas</h1>
    <!--comienzo single page -->
    
    <br>
</div>
<div class="contenido-radio">
    <ul  class="galeria-category">
        <?php 
        if (have_posts()) {
            while (have_posts()) : the_post(); ?>                
            <li>
                <div class="imagen-category">
                    <a href=""><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumnails', array('class' => 'img-fluid'));}?></a>
                </div>
                <div class="contenido-category">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><h1><?php the_title(); ?> </h1></a>
            
                <small>  Publicado el: <?php the_time('d M Y'); ?> </small>
               
                <small><?php the_excerpt(); ?></small>
                </div>

            </li>
        <?php endwhile;}?>
    </ul>
    <div class="paginacion">
        <div class="nav-previous alignleft">
           
            
              <?php next_posts_link('<button class="btn">Noticias Anteriores</button>'); ?>
            
                
        </div>
        
        <div class="nav-next alignright">
            <?php previous_posts_link('<button class="btn">Noticias mas Recientes </button>'); ?>
        </div>

</div>
 

</div>
</div>
<?php get_footer(); ?>