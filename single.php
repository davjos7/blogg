
  <?php get_header(); ?>
  	<section class="container">
  		<div>
  			<img src="<?php the_post_thumbnail_url(); ?>"><br>

  			<h2><?php the_title(); ?></h2>


  			 <div class="text-center" style="color: white; "><?php the_content(); ?></div>

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