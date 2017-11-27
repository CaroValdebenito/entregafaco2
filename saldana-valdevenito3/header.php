
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="…">
    <meta name="author" content="…">
    <title>Videojuegos Educativos Chilenos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fix.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Videojuegos Educativos Chilenos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>active<?php };?>"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='generalidades.php'){?>active<?php };?>"><a class="nav-link" href="generalidades.php">Generalidades</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='analisis.php'){?>active<?php };?>"><a class="nav-link" href="analisis.php">Análisis</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='acercade.php'){?>active<?php };?>"><a class="nav-link" href="acercade.php">Acerca de</a></li>

        </ul>
      </div>
    </nav>
    <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
    <div class="container">
      <div class="jumbotron">
        <h1>Videojuegos Educativos Chilenos</h1>
<h5>Plataforma guía para los creadores y desarrolladores de videojuegos educativos chilenos</h5>
      </div>
    </div>
    <?php } else {;?>
    <div class="container">
      <div class="jumbotron">
        <h1>Videojuegos Educativos Chilenos</h1>
        <p class="lead">Plataforma guía para los creadores y desarrolladores de videojuegos educativos chilenos</p>
      </div>
    </div>

 <?php };?>
