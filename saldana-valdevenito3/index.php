<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-12 py-5">

<?php
$csv = array_map('str_getcsv', file('data/videojuegos_educativos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>
<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
              <h2 class="post-title">
                Introducción
              </h2>
              <h3 class="post-subtitle">
                ¿Porqué escogimos este tema?
              </h3>
            <p> En Chile el desarrollo de videojuegos educativos no tiene muchos años de carrera. Gran parte de los videojuegos desarrollados son proyectos que ganaron concursos y fueron financiados por la CONICYT (Comisión Nacional de Investigación Científica y Tecnológica), además de ser premiados por los expertos de las áreas correspondientes. Según estos antecedentes, nos surge la duda de si, de estos proyectos que han sido premiados ¿Cuales son sus aspectos, destacados y débiles, comparativamente a videojuegos no necesariamente educativos, que sí son exitosos? ¿Qué opian los usuarios de ellos, respecto a su contenido? </p>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Carolina Valdebenito</a>
              on November 24, 2017</p>
          </div>
<h2>Encuenta Preliminar</h2> 
      <table class="table table-bordered table-striped table-responsive">
    		<thead>
    			<tr>
<th>¿Has jugado alguna vez algún juego educativo?</th>
                    <th>¿Qué juego educativo te ha gustado más?</th>
    			</tr>
    		</thead>
    		<tbody>
                <?php $mujeres = 0; $hombres = 0;?>
    			<?php for($a = 0; $a < $total = count($csv); $a++){?>
    			<tr>

                    <td><?php echo($csv[$a]["1. ¿Has jugado alguna vez algún juego educativo? "])?></td>
                    <td><?php echo($csv[$a]["2. Si es así, ¿qué juego educativo te ha gustado más?"])?></td>
    			</tr>
    			<?php };?>
    		</tbody>
    	</table>

<div class="alert alert-danger">
<h4>Ellas son <?php print $mujeres;?> v/s ellos que son <?php print $hombres;?></h4>
</div>



</div>
</div>
</div>
<?php include('footer.php')?>
