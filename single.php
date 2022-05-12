
  <?php get_header(); ?>
  	<section class="container">
  		<div>
  			

  			<h2><?php the_title(); ?></h2>

  			<h4 style="color: white;"><?php the_field('resumen'); ?></h4>

  			<img src="<?php the_post_thumbnail_url(); ?>"><br>


  			 <div class="text-center" style="color: white; "><?php the_content(); ?></div>

  			 <h4 style="color: white;">Fuente: <?php the_field('fuente'); ?></h4>


			  	<ul>

			 		<li style="display: inline-block; "><a href="#">categoria</a></li>
			 		<li style="display: inline-block; "><a href="#">Historias</a></li>
			 		<li style="display: inline-block; "><a href="#">mangas</a></li>
			 		<li style="display: inline-block; "><a href="#">video</a></li>

			 	</ul>

  		</div>
  		
  	</section>





<?php get_footer(); ?>

  	</center>

  	
</body>
</html>