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
    $servername = "db";
    $username = "user";
    $password = "password";
    $database = "demo";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p class='ok'>✅ Connexió establerta correctament amb la base de dades <strong>$database</strong>.</p>";
        $stmt = $conn->query("SELECT NOW() AS hora_actual");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo "<p>🕒 Hora actual del servidor MySQL: <strong>{$row['hora_actual']}</strong></p>";
    } catch (PDOException $e) {
        echo "<p class='error'>❌ Error de connexió: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>
</body>

</html>