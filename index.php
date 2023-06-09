<!DOCTYPE html>
<html lang="es-mx">
<head>
 <meta charset="UTF-8">
 <title>CiTIM Grupo XB</title>
 <link rel="stylesheet" href="css/problemaStem.css"/>
 <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
 <script>
    function calcula_pico(){
        var wien = 2.8977729e-3;
        var temperatura = 5518;
        var pico = wien / temperatura;
        var d = document.getElementById("resultadoA");
        d.innerHTML = pico + 'Angström';
    }
 </script>
</head>
<body>
 <?php
    $constanteWien = 2.8977729e-3;
    $temperatura = 5518;
    $picoMaximaEmision = $constanteWien / $temperatura;

    if(isset($_POST['calcular'])) {
        $picoMaximaEmision = $constanteWien / $_POST['temperatura'];
    }
 ?>

 <section class="wrapper">
 <header>
 <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
 </header>
 <section id="contenedor">
 <section class="problema">
 <h2>Problema: ¿Cuál es el pico de máxima emisión en Amgstrom?</h2>
 <p>Descripción:</p>
 <p>Kepler-22b es el primer exoplaneta encontrado en la zona habitable y la estrella que orbita tiene una temperatura de 5518K. <br>
 </p>
 </section>
 <section class="esquemaProblema">
 <h2>Esquema</h2>
 <center>
 <img class="imgProblema" src="images/12681.jpg">
 </center>
 </section>
 <section class="formulas">
 <h2>Fórmulas</h2>
 Pico de máxima emisión = constanteWien / temperatura<br>
 </section>
 <section class="datos">
 <h2>Datos:</h2>
 Contatante Wien = 2.8977729e-3. <br>
 Temperatura = 5518 K.
 </section>
 <section class="calculos">
 <h2>Solución</h2>
 <p>a) El pico de máxima emisión en Angström es:<br>
 Pico de máxima emisión = <?php print($constanteWien); ?> / <?php print($temperatura); ?> <br>
 </p>
 <button onclick="calcula_pico();">Presiona para calcular</button>
 </section>
 <section class="resultado">
 <h2>Resultado:</h2>
 <div id="resultadoA">
    <?php
        if(isset($_POST['calcular'])) {
            print($picoMaximaEmision . ' Ångström');
        }
    ?>
 </div>
 </section>
 </section>
 <footer class="pie">
 Creative Commons versión 3.0 SciSoft 2023
 </footer>
 </section>
</body>
</html>
