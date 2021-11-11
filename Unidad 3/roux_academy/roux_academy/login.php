<?php
  require 'conexion.php';
  $conexion=conectar($servidor, $usuario, $contraseña, $bd);

  $valido=false;
  if(isset($_POST['aceptar'])){
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];

    if(!validar_usuario_bd($usuario,$contraseña,$conexion)){
      //echo "No es válido <br/>";
      $valido=false;
    }else{
      //echo "Es válido <br/>";
      session_start();
      $valido=true;
      $_SESSION['usuario']=$usuario;
      header('Location:asistentes.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/roux_academy/roux_academy/css/style.css">
<link rel="stylesheet" type="text/css" href="css/estiloLog.css">
<title>Roux Conference</title>
</head>
<body id="page_home">
<div class="wrapper">
  <header> 
    <div class="branding"> <img src="/roux_academy/roux_academy/images/ralogo_monogram.png" alt="Logo">
      <p>Roux Academy<br>
        Art • Media • Design</p>
    </div>
    <div class="description">
      <h1>Roux Academy 2016 Art Conference</h1>
      <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
    </div>
    <nav>
      <ol>
        <li><a href="/roux_academy/roux_academy/index.php">HOME</a></li>
        <li><a href="/roux_academy/roux_academy/artists.php">ARTISTS</a></li>
        <li><a href="/roux_academy/roux_academy/schedule.php">SCHEDULE</a></li>
        <li><a href="/roux_academy/roux_academy/venue.php">VENUE/TRAVEL</a></li>
        <li><a href="/roux_academy/roux_academy/register.php">REGISTER</a></li>
        <li><a href="/roux_academy/roux_academy/asistentes.php">ASISTENTES</a></li>
        <li><a href="/roux_academy/roux_academy/login.php">LOG IN</a></li>
      </ol>
    </nav>
  </header>

  <div id="rotator"> <img src="images/art01.jpg" alt="Artwork from show"> </div>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>Login</h2>
      <p>Por favor, inicia sesión con tu cuenta de usuario. </p>
      <div class="contenedor_login">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <input type="text" class="form_ctrl" name="usuario" placeholder="Usuario" required="Introduce el nombre de usuairo">

          <input type="password" name="contraseña" class="form_ctrl" placeholder="Contraseña" required="">

          <input type="submit" name="aceptar" class="btn" value="Ingresar">
          <?php
            if (!$valido && isset($_POST['aceptar'])) {
              # code...
              echo "<p class=alerta> Usuario y/o contraseña no válido</p>";
            }
          ?>
          
        </form>
      </div>

    </article>
    <!-- About the event -->
    <section>
      
    </section>
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar">
    <article id="artistlist">
      <h2>Featured Artists</h2>
      <p>Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>
      <div class="pixgrid">
        <ul>
          <li><img src="images/artists/Barot_Bellingham_tn.jpg" alt="Barot Bellingham"></li>
          <li><img src="images/artists/Constance_Smith_tn.jpg" alt="Constance Smith"></li>
          <li><img src="images/artists/Hassum_Harrod_tn.jpg" alt="Hassum Harrod"></li>
          <li><img src="images/artists/Hillary_Goldwynn_tn.jpg" alt="Hillary Goldwynn"></li>
          <li><img src="images/artists/Jennifer_Jerome_tn.jpg" alt="Jennifer Jerome"></li>
          <li><img src="images/artists/Jonathan_Ferrar_tn.jpg" alt="Jonathan Ferrar"></li>
          <li><img src="images/artists/LaVonne_LaRue_tn.jpg" alt="LaVonne LaRue"></li>
          <li><img src="images/artists/Riley_Rewington_tn.jpg" alt="Riley Rewington"></li>
          <li><img src="images/artists/Xhou_Ta_tn.jpg" alt="Xhou Ta"></li>
        </ul>
        <p><a class="link" href="artists.php">Artist Info</a></p>
      </div>
    </article>
    <!-- Featured Artists -->    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->
  
<?php
  require("layouts/footer.php");
?>