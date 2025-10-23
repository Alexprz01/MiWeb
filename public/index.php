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
    try {
        // Crear connexió PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p class='ok'>✅ Connexió establerta correctament amb la base de dades <strong>$dbname</strong>.</p>";

        // Exemple de consulta
        $stmt = $conn->query("SELECT NOW() AS hora_actual");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo "<p>🕒 Hora actual del servidor MySQL: <strong>{$row['hora_actual']}</strong></p>";
    } catch (PDOException $e) {
        echo "<p class='error'>❌ Error de connexió: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>
</body>

</html>