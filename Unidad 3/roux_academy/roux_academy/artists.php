<?php
  require ('conexion.php');
  $conexion=conectar($servidor, $usuario, $contraseña, $bd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Roux Conference</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body id="page_artists">
<div class="wrapper">
  <header>
    <div class="branding"> <img src="images/ralogo_monogram.png" alt="Logo">
      <p>Roux Academy<br>
        Art • Media • Design</p>
    </div>
    <div class="description">
      <h1>Roux Academy 2016 Art Conference</h1>
      <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lecturs by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
    </div>
    <nav>
      <ol>
        <li><a href="index.php">HOME</a></li>
        <li><a href="artists.php">ARTISTS</a></li>
        <li><a href="schedule.php">SCHEDULE</a></li>
        <li><a href="venue.php">VENUE/TRAVEL</a></li>
        <li><a href="register.php">REGISTER</a></li>
        <li><a href="asistentes.php">ASISTENTES</a></li>
        <li><a href="login.php">LOG IN</a></li>
      </ol>
    </nav>
  </header>
  <div id="rotator"> <img src="images/art01.jpg" alt="Artwork from show"> </div>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>About the Event</h2>
      <p>Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees. It is truly an honor to be a CAC Featured Artist and many past students artists who were featured at CAC have gone on to brilliant careers in art.</p>
      <div class="artistgroup">
        <ul>
          <?php
              $consulta="SELECT * FROM `artistas` ";

              $registros=mysqli_query($conexion,$consulta);
              if ($registros->num_rows>0) {
                while ($fila = $registros->fetch_assoc()) {
                  ?>
                  <h3> <?php echo $fila["nombre"] ?> </h3>
                  <p> <img src="<?php echo $fila["foto"] ?>"> <?php echo $fila["descripcion"] ?><br><br><br></p>
                <?php
                }
              }
              else{
                echo "Error al hacer la consulta";
              }      
            ?>          
        </ul>
      </div>
      <!-- Artist Group --> 
    </article>
    <!-- Featured Artists --> 
    
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar">
    <article>
      <h2>The Art</h2>
      <p>This year’s art pieces will inspire thought, conversation, imagination, and even criticism, as modern art often does. From critically-acclaimed works created by our Featured Artists, to a vast assortment of works by talented art students in schools across the world.</p>
      <div class="pixgrid">
        <ul>
          <li><img src="images/art/Barot_Bellingham_tn.jpg" alt="Art from Barot Bellingham"></li>
          <li><img src="images/art/Constance_Smith_tn.jpg" alt="Art from Constance Smith"></li>
          <li><img src="images/art/Hassum_Harrod_tn.jpg" alt="Art from Hassum Harrod"></li>
          <li><img src="images/art/Hillary_Goldwynn_tn.jpg" alt="Art from Hillary Goldwynn"></li>
          <li><img src="images/art/Jennifer_Jerome_tn.jpg" alt="Art from Jennifer Jerome"></li>
          <li><img src="images/art/Jonathan_Ferrar_tn.jpg" alt="Art from Jonathan Ferrar"></li>
          <li><img src="images/art/LaVonne_LaRue_tn.jpg" alt="Art from LaVonne LaRue"></li>
          <li><img src="images/art/Riley_Rewington_tn.jpg" alt="Art from Riley Rewington"></li>
          <li><img src="images/art/Xhou_Ta_tn.jpg" alt="Art from Xhou Ta"></li>
        </ul>
</div>
    </article>
    <!-- Featured Artists -->
    <article id="comingtoevent">
      <h2 class="highlight">Coming to the event?</h2>
      <h3>Check out our mobile site</h3>
      <p>Our mobile site contains schedules, and exhibit/ artist details, accessible simply by scanning QR codes located all around the venue exhibit halls.</p>
      <p><img src="images/iphone.png" alt="Mobile phone"></p>
      <p><a class="link" href="#">Roux mobile</a></p>
    </article>
    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->

<?php
  require("layouts/footer.php");
?>
