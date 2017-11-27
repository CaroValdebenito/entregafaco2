<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-12 py-5">

<?php
$csv = array_map('str_getcsv', file('data/eleccion_diputados.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>
<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
<h3>Proyecto</h3>
<p>La siguiente web nace de  una investigación realizada por dos alumnas estudiantes de Diseño Gráfico pertenecientes a la Universidad de Chile, investigación que presenta el concepto de Gamification, al cual se le evalúa su aplicación dentro del contexto de la educación chilena actual, específicamente en estudiantes de entre los 15 a 18 años, de diferentes establecimientos educativos de la región metropolitana. El método utilizado fueron las encuestas, cuyo propósito fue determinar qué tan influyentes son los videojuegos educativos dentro del aula de clases y cuales son sus resultados, tanto en el ámbito de la enseñanza como en el del juego en sí (y sus componentes).
El objetivo principal de esta investigación es  servir de guía o referencia para futuros desarrolladores de videojuegos educativos, mostrando los puntos clave que los usuarios destacan como fuertes o débiles, todo esto basado en los principios de la Ludificación.

</p>
<h3>Propuesta</h3>
<p>La propuesta consiste en crear una plataforma que sirva de guía para los creadores y desarrolladores de videojuegos educativos chilenos.</p>

<h3>Objetivo General</h3>
<p>El objetivo del proyecto es exponer los resultados obtenidos previamente por “videojuegos chilenos” de manera de generar una web guía para futuros desarrolladores.
</p>
<h3>Objetivos Específicos:</h3>
<p>-Comparar los resultados de videojuegos educativos chilenos para generar diferentes bases de datos.</p>
<p>-Organizar estos datos y mostrarlos de manera sencilla a través de la aplicación.</p>
<h3> Desarrollo del proyecto</h3>

<p>La encuesta fue entregada de manera online, por redes sociales, para llegar directamente al público objetivo señalado, que es estudiantes entre 15 y 18 años, haciendo uso de la herramienta Formularios de Google. Resultado que se exporto a un CSV para generar las distintas visualizaciones de datos.</p>
<p>Se importaron datos directos desde el csv para generar tablas, como tambien para generar las distintas visualizaciones.</p>
    <hr>

</div>
</div>
</div>
<?php include('footer.php')?>
