
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stilos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- <link rel="stylesheet" href="stylos.css"> -->
    <title>Formulario</title>
</head>
<body>
    
  
 
        <div class="menu-icon" onclick="toggleMenu()">
            <p class="logo">
                <img src="logo.jpg" alt="Logo" class="logo" style="width: 100px; height: auto;">
            </p>
          
         
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</div>

<nav class="menu">
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="form.html">Contacto</a></li>
       
    </ul>
</nav>
<div class="title">

        <span style="--letra-index: 1;">S</span>
        <span style="--letra-index: 2;">o</span>
        <span style="--letra-index: 3;">m</span>
        <span style="--letra-index: 4;">o</span>
        <span style="--letra-index: 5;">s</span>
        <span style="--letra-index: 6;"> </span>
        <span style="--letra-index: 9;"></span>

        <span style="--letra-index: 7;">t</span>
        <span style="--letra-index: 8;">u</span>
        <span style="--letra-index: 9;"></span>

        <span style="--letra-index: 9;"> </span>
        <span style="--letra-index: 10;">m</span>
        <span style="--letra-index: 11;">e</span>
        <span style="--letra-index: 12;">j</span>
        <span style="--letra-index: 13;">o</span>
        <span style="--letra-index: 14;">r</span>
        <span style="--letra-index: 9;"></span>

        <span style="--letra-index: 15;"> </span>
        <span style="--letra-index: 16;">D</span>
        <span style="--letra-index: 17;">i</span>
        <span style="--letra-index: 18;">s</span>
        <span style="--letra-index: 19;">t</span>
        <span style="--letra-index: 20;">r</span>
        <span style="--letra-index: 21;">i</span>
        <span style="--letra-index: 22;">b</span>
        <span style="--letra-index: 23;">u</span>
        <span style="--letra-index: 24;">i</span>
        <span style="--letra-index: 25;">d</span>
        <span style="--letra-index: 26;">o</span>
        <span style="--letra-index: 27;">r</span>
        <span style="--letra-index: 28;">a</span>
</div>
<br>
<div class="tabla">
<p class="title_card">
        <span style="--letra-index: 1;">N</span>
        <span style="--letra-index: 2;">U</span>
        <span style="--letra-index: 3;">E</span>
        <span style="--letra-index: 4;">S</span>
        <span style="--letra-index: 5;">T</span>
        <span style="--letra-index: 6;">R </span>
        <span style="--letra-index: 7;">O</span>
        <span style="--letra-index: 8;">S</span>
        <span style="--letra-index: 9;"></span>
        <span style="--letra-index: 12;">P</span>
        <span style="--letra-index: 13;">R</span>
        <span style="--letra-index: 14;">O</span>
        <span style="--letra-index: 15;">D</span>
        <span style="--letra-index: 16;">U</span>
        <span style="--letra-index: 17;">C</span>
        <span style="--letra-index: 18;">T</span>
        <span style="--letra-index: 19;">O</span>
        <span style="--letra-index: 20;">S</span>
        <span style="--letra-index: 21;"></span>
        <span style="--letra-index: 22;"></span>
        <span style="--letra-index: 23;"></span>
        
    </p>
</div>
    <?php include 'productos.php'?>


<div id="cards-container">


<div class="datos_emp">
<div class="tarjeta_word" id="misionTarjeta" onclick="mostrarInformacion('mision')">
    <h2>Misión</h2>
    <p>Estamos comprometidos a...</p>
</div>

<div class="tarjeta_word" id="visionTarjeta" onclick="mostrarInformacion('vision')">
    <h2>Visión</h2>
    <p>Nos visualizamos como...</p>
</div>

<div class="informacion" id="informacionMision">
    <h2>Misión</h2>
    <p>En [Nombre de la Distribuidora], nos dedicamos a ofrecer productos de alta calidad y servicios excepcionales a nuestros clientes...</p>
    <button onclick="ocultarInformacion('mision')">Cerrar</button>
</div>

<div class="informacion" id="informacionVision">
    <h2>Visión</h2>
    <p>Nos visualizamos como líderes reconocidos en la industria de distribución, destacando por nuestra excelencia operativa y compromiso con la satisfacción del cliente...</p>
    <button onclick="ocultarInformacion('vision')">Cerrar</button>
</div>
</div>
</div>
<br>
    <br>
<footer>
<p>&copy; 2024 Tu Distribuidora. Todos los derechos reservados.</p>
    
<a href="https://github.com/Emilianolandi" target="_blank"><img src="img/github_logo.png" alt="Facebook" width="40px", height="40px"></a>
            <a href="#" target="_blank"><img src="img/face.png" alt="Twitter"></a>
            <a href="#" target="_blank"><img src="img/insta.png" alt="Instagram"></a>
        
    
   

</footer>
</body>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </html>
    
