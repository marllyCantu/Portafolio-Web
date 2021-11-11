<?php
  require("inicioSesion.php");
  require ('conexion.php');
  $conexion=conectar($servidor, $usuario, $contraseña, $bd);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="/roux_academy/roux_academy/css/style.css">
<link rel="stylesheet" type="text/css" href="/roux_academy/roux_academy/css/estiloAsistente.css">
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
      <h2>Asistentes</h2>
      <table id="tablaAsistentes" name="tablaAsistentes">
          <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Compañía</th>
            <th>Email</th>
            <th>Solicitud</th>
            <th>Comentario</th>
            <th>Referecia</th>
          </thead>       
        
      <?php
        $consulta="SELECT * FROM `asistentes` ";

        $registros=mysqli_query($conexion,$consulta);
        if ($registros->num_rows>0) {
          while ($fila = $registros->fetch_assoc()) {
            # code...
            /*echo "ID: ". $fila["ID_Asistente"]. "<br>";
            echo "Nombre: ". $fila["nombre"]. "<br>";
            echo "Company: ". $fila["company"]. "<br>";
            echo "Email: ". $fila["email"]. "<br>";
            echo "Tipo de solicitud: ". $fila["tipo"]. "<br>";
            echo "Comentario: ". $fila["comentario"]. "<br>";
            echo "Escuchó de nosotros: ". $fila["referencia"]. "<br>";*/
            ?>
            <tr>
              <td><?php echo $fila["ID_Asistente"] ?></td>
              <td><?php echo $fila["nombre"] ?></td>
              <td><?php echo $fila["company"] ?></td>
              <td><?php echo $fila["email"] ?></td>
              <td><?php echo $fila["tipo"] ?></td>
              <td><?php echo $fila["comentario"] ?></td>
              <td><?php echo $fila["referencia"] ?></td>
            </tr>
            <?php
          }
        }
        else{
          echo "Error al hacer la consulta";
        }      
      ?>
      </table>


    </article>
    <!-- About the event -->
    <section>
      
    </section>
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar">
    <section class="identificador" display="flex">
      <div>
        <h1>    ¡Bienvenido <?php echo $_SESSION['usuario']?>!</h1>    
        <a id="cerrar" href="cerrarSesion.php">Cerrar Sesión</a>
      </div>

    </section>  
    <article id="artistlist">
      <br>
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