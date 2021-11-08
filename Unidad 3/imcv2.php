
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="css/imcv2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
</head>
<body>

    <div class="contenido">
        <div class="encabezado">
            <h1>Calculadora de IMC</h1>
        </div>

        <form action="" method="POST">
            <div class="altura">
                <label for="altura">Altura (m):</label>
                <input type="text" name="altura" id="altura">
            </div>
            <div class="peso">
                <label for="peso">Peso (kg):</label>
                <input type="number" name="peso" id="peso">
            </div>
            <input type="submit" value="CALCULAR" name="calcular" id="calcular">
            <input type="button" id="limpiar" value="REINICIAR" onclick="location.reload();">
        </form>

        <?php 
            if (isset($_POST['calcular'])) {
                $altura = $_POST['altura'];
                $peso = $_POST['peso'];

                function calcular($altura, $peso) {
                    $imc = $peso / pow($altura, 2);

                    if ($imc < 18.5) {
                        return "{$imc} <br> Peso bajo";
                    }
                    if ($imc >= 18.5 && $imc <= 24.9) {
                        return "{$imc} <br> Peso normal";
                    }
                    if ($imc >= 25 && $imc <= 29.9) {
                        return "{$imc} <br> Sobrepeso";
                    }
                    if ($imc > 30) {
                        return "{$imc} <br> Obesidad";
                    }
                }

                $imc = calcular($altura, $peso);

                echo "<h4>Peso: $peso</h4>";
                echo "<h4>Altura: $altura</h4>";
                echo "<h2>IMC = $imc</h2>";
            }
        ?>
    </div>
    
</body>
</html>
