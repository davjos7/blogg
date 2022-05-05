<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Noticia</title>
      <?php wp_head(); ?>
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
                  <h1 style="padding-left: 89px;"><?php bloginfo('name');?></h1>
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