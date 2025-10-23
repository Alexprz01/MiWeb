<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Hola món amb PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1><?php echo "Hola món des de PHP i Docker!"; ?></h1>
    <?php
    // Dades de connexió
    $servername = "db";
    $username = "user";
    $password = "password";
    $database = "demo";
    // Crear connexió
    $conn = new mysqli($servername, $username, $password, $database);
    // Comprovar connexió
    if ($conn->connect_error) {
        die(" Connexió fallida: " . htmlspecialchars($conn->connect_error));
    }
    echo "<p> Connexió correcta a la base de dades MySQL!</p>";
    // Tancar connexió
    $conn->close();
    ?>
</body>

</html>