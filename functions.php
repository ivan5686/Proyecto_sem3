
create_function('get_header', function() {
   
    echo '<header><h1>ProyectoSem3</h1></header>';
});
<?php
get_header(); 
if (have_posts()) : while (have_posts()) : the_post(); ?>



<!-- sidebar.php -->
<aside class="sidebar">
    <h3>Menú Lateral</h3>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="blog.php">My Blog</a></li>
        <li><a href="page-contacto.php">Página de Contacto</a></li>
    </ul>
</aside>
  
     


