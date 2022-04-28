<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Noticia</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="https://cdn-icons-png.flaticon.com/512/88/88290.png">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/estilo.css">
</head>
<body>
<center>

		



	<header class="container-fluid"> 	
		<div class="row">
			<div class="col-lg-3">
					<img src="https://cdn-icons-png.flaticon.com/512/88/88290.png" width="100px" 	class="tit">
					<h1><?php bloginfo('name');?></h1>
			</div>
			<div class="col-lg-9">
	        <ul class="menu">
	        	<li><a href="#">inicio</a></li>
	        	<li><a href="#">novedades</a></li>
	        	<li><a href="#">secciones</a></li>
	        	<li><a href="#">contacto</a></li>

	        </ul>
        </div>


</div>
	</header>
	<?php $articulos = new WP_Query([
			'showposts'=> 3,
		]);

		while ($articulos->have_posts()) {
			$articulos->the_post();

			the_title();
			echo '<hr>';
			// code...
		}?>

		
   
 <section class="container">
   		
   	<div>
   		<img src="https://as01.epimg.net/meristation/imagenes/2021/03/22/noticias/1616401362_122521_1616401499_noticia_normal.jpg" width="200px" class="imagen"><br>

   		<h2>Final De Anime</h2>

    <p>El último capítulo de “Shingeki no Kyojin” se estrenará el domingo 3 de marzo de 2022 en Japón a través de NHK y en América Latina, de manera online, a través la plataforma Crunchyroll.</p>


   	</div>
   	<hr>
   	<div>

   		<img src="https://depor.com/resizer/IDDHG73kzYo7pFWtlNBXr-a2yWc=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/O4W2UN5F7RB7FHC7SR67TWVEWY.jpg"
   		width="200px"><br>

   		<h2>Final De Demon Slayer</h2>
   		
     
    <p>El rango superior se reúne todos juntos una vez que se cierra el 'Arco del Distrito de Entretenimiento' y uno de los suyos se pierde. Akaza aparece aún dolido por su batalla con Rengoku, y no está solo. Otros como Gyokko aparecen en esta reunión, pero todos los ojos están puestos en Kokushibo.</p>


   	</div>
   	<hr>
   
   	<div>
   		<img src="https://areajugones.sport.es/wp-content/uploads/2021/03/imagen-2021-03-18-083639-1080x609.jpg" width="200px"><br>

   		<h2>Final De Black clover</h2>
   		
     
    <p>No hace ni 24 horas que se producían las filtraciones en torno a que el manga de "Black Clover" se disponía a estar un breve período de tiempo completamente ausente. Lo cierto es que en ese entonces no se sabía ni el motivo ni cuánto tiempo se iban a quedar los lectores sin Asta y compañía, una serie de dudas que ahora se han visto disipadas. Todo tiene su final, y parece ser que después de 7 años de publicación ininterrumpida, Yuki Tabata se dispone a darle sus últimas pinceladas a Asta y compañía</p>


   	</div>
   	<hr>
   
     
 </section>

 <footer>
 	<ul class="pie">
 		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
 		<li><a href="#"><i class="fa fa-instagram"></i></a></li>
 		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
 		<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>

 	</ul>


 </footer>


</center>

</body>
</html>