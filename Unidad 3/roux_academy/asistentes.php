<?php
  require("layouts/header.php");
  require("inicioSesion.php");
  require 'conexion.php';
  $conexion=conectar($servidor, $usuario, $contraseña, $bd);
?>

  <div id="rotator"> <img src="images/art01.jpg" alt="Artwork from show"> </div>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>Asistentes</h2>
      <p>Personas registradas para el evento y su información relevante. </p>
      <?php
        $consulta="SELECT * FROM `asistentes` ";

        $registros=mysqli_query($conexion,$consulta);
        if ($registros->num_rows>0) {
          # code...
          while ($fila = $registros->fetch_assoc()) {
            # code...
            echo "ID: ". $fila["ID_Asistente"]. "<br>";
            echo "Nombre: ". $fila["nombre"]. "<br>";
            echo "Company: ". $fila["company"]. "<br>";
            echo "Email:: ". $fila["email"]. "<br>";
            echo "Tipo de solicitud: ". $fila["tipo"]. "<br>";
            echo "Comentario: ". $fila["comentario"]. "<br>";
            echo "Escuchó de nosotros: ". $fila["referencia"]. "<br>";
          }
        }
        else{
          echo "Error al hacer la consulta";
        }



      ?>
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