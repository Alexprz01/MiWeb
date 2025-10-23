<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hola món amb PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1><?php echo "Hola món des de PHP i Docker!"; ?></h1>

    <?php
    $servername = "db";
    $username = "user";
    $password = "password";
    $database = "demo";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("❌ Connexió fallida: " . $conn->connect_error);
    }
    echo "✅ Connexió correcta a la base de dades MySQL!";
    $conn->close();
    ?>

</body>

</html>