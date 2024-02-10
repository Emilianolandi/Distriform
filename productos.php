<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style>
        /* dispositivos móviles */
        @media only screen and (max-width: 600px) {
            .tarjeta {
                width: 100%; 
                margin: 0 auto; /
            }
        }
    </style>
</head>
<body>

<?php
// Conexión a la base de datos
$servername = "localhost";
// $username = "id21638115_emiliano";
$username = "root";
// $password = "Emiliano21*.";
$password = "";
// $dbname = "id21638115_distribuidora";
$dbname = "distribuidora_24";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Consulta SQL para obtener los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}
?>

<div class="card-container">
    <?php
    //  mostrar cada producto en una tarjeta
    while ($row = $result->fetch_assoc()) {
    ?>
        <div class="tarjeta">
            <h2><?php echo $row['Nombre']; ?></h2>
            <p>Precio: $<?php echo $row['Precio']; ?></p>
            <p><?php echo $row['descripcion']; ?></p>
            <p>Stock: <?php echo $row['Stock']; ?></p>
        </div>
    <?php
    }
    ?>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.card-container').slick({
            slidesToShow: 3, 
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [
                {
                    breakpoint: 600,    
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                }
            ]
        });
    });
</script>

<?php
// Cerrar la conexión
$conn->close();
?>
</body>
</html>
