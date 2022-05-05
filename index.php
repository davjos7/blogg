
      <?php get_header(); ?>
      </center>
      <div class="container">
         <?php $articulos = new WP_Query([
            'showposts'=> 3,
            ]);
            
            while ($articulos->have_posts()) {
            $articulos->the_post();?>
         <div class="row post mb-4" style="border: dashed yellow; yellow; padding: 10px; background-color: black; border-radius: 5px;  box-shadow: 0 0 15px rgb(0, 0, 0, 0.8);">
            <div class="col-sm-4 img-fluid">
               <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-sm-8">
               <h2 style="text-align: left;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
               <?php the_excerpt(); ?>	
               <p class="autor">Publicado por <?php the_author();?> <?php the_time("d/m/Y");?></p>
               <button style="background: red; margin-top: 45px; box-shadow: 2px 2px 40px 5px blue; 
                  border-radius: 10px;">Ver Mas</button>
            </div>
         </div>
         <?php } ?>
      </div>
      <center>
        	 <?php get_footer(); ?>