
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
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
    // Iterar a través de los resultados y mostrar cada producto en una tarjeta
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

<!-- Incluir jQuery y Slick Carousel y configurar el slider -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.card-container').slick({
            slidesToShow: 3, // Muestra 4 tarjetas a la vez
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
        });
    });
</script>

<?php
// Cerrar la conexión
$conn->close();
?>
