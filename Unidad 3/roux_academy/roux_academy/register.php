<?php
  require("layouts/header.php");
  //echo "holaaaa";

  require("conexion.php");
  $conexion=conectar($servidor, $usuario, $contraseña, $bd);

 

  if (isset($_POST['nombre'])) {
    $nombre = $_POST["nombre"];
  }
  else{
     $nombre = "";  
  }
  if (isset($_POST['companyname'])) {
    $company = $_POST["companyname"];
  }else{
    $company = "";
  }

  if (isset($_POST['myemail'])) {
    $email = $_POST["myemail"];
  }else{
    $email = "";
  }

  if (isset($_POST['requesttype'])) {
       $tipo = $_POST["requesttype"];
  }else{
    $tipo = "";
  
  }

  if (isset($_POST['mycomments'])) {
    $comentario = $_POST["mycomments"];
  }else{
    $comentario = "";
  
  }

  if (isset($_POST['reference'])) {
    $referencia = $_POST["reference"];
  }else{
    $referencia = "";
  }
    

   /*$consulta="INSERT INTO asistentes(ID_Asistente, nombre, company, email, tipo, comentario, referencia) VALUES(null, '$nombre', '$company', '$email', '$tipo', '$comentario', '$referencia')";
    if(mysqli_query($conexion,$consulta)){
    echo "Jaló el asunto <br>";
    }else{
      echo "Falló el asunto <br>";
    }*/
  if (isset($_POST['nombre'])) {
    # code...
    $consulta="INSERT INTO asistentes(ID_Asistente, nombre, company, email, tipo, comentario, referencia) VALUES(null, '$nombre', '$company', '$email', '$tipo', '$comentario', '$referencia')";

    if(mysqli_query($conexion,$consulta)){
      //echo "Jaló el asunto";
      //echo "<script>alert('¡Tu registro ha sido guardado!')</script>";
    }else{
      //echo "Falló el asunto";  
    }
  }  


  //echo "<br>nombre: ".$nombre." <br>compañia: ".$company." <br>email:" .$email." <br>tipo: ".$tipo." <br>comentario: ".$comentario." <br>referencia: ".$referencia ;https://www.elcodigofuente.com/uso-funcion-isset-php-700/

?>

  <div id="rotator"> <img src="images/art01.jpg" alt="Artwork from show"> </div>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>Register</h2>
      <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below. </p>
    </article>
    <!-- About the event -->
    
    <article id="registrationform">
      <form method="post" action="">
        <fieldset>
          <legend>Personal Info</legend>
          <ol>
            <li>
              <label for="myname">Name *</label>
              <input type="text" name="nombre" id="myname" placeholder="Last, First" required>
            </li>
            <li>
              <label for="companyname">Company Name</label>
              <input type="text" name="companyname" id="companyname">
            </li>
            <li>
              <label for="myemail">Email *</label>
              <input type="email" name="myemail" id="myemail" required autocomplete="off">
            </li>
            <li>
              <div class="grouphead">Request Type</div>
              <ol>
                <li>
                  <input type="radio" name="requesttype" value="Pregunta" id="question">
                  <label for="question">Question</label>
                </li>
                <li>
                  <input type="radio" name="requesttype" value="Comentario" id="comment">
                  <label for="comment">Comment</label>
                </li>
              </ol>
            </li>
            <li>
              <label for="mycomments">Comment</label>
              <textarea name="mycomments" id="mycomments"></textarea>
            </li>
            <li class="singleline">
              <input type="checkbox" id="subscribe" name="subscribe" checked="" value="yes">
              <label for="subscribe">Subscribe to our mailing list?</label>
            </li>
            <li>
              <label for="reference">How did you hear about us?</label>
              <select name="reference" id="reference">
                <option>Choose...</option>
                <option value="Amigo">A friend</option>
                <option value="Facebook">Facebook</option>
                <option value="Twitter">Twitter</option>
              </select>
            </li>
          </ol>
          <input type="submit" value="Send">
        </fieldset>
      </form>
    </article>
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