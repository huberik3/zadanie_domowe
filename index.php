<?php
require_once 'polaczenie.php';

if (isset($_POST['zapisz'])) {
    $tekst = "Kliknięcie użytkownika";
    $sql = "INSERT INTO wpisy (tekst) VALUES ('$tekst')";
    mysqli_query($conn, $sql);
}

$wyniki = mysqli_query($conn, "SELECT * FROM wpisy ORDER BY id DESC LIMIT 5");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Projekt PHP + MySQL (Dwa pliki)</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f9; }
        button { padding: 12px 24px; font-size: 16px; cursor: pointer; background-color: #2ea44f; color: white; border: none; border-radius: 6px; }
        button:hover { background-color: #2c974b; }
        ul { list-style: none; padding: 0; display: inline-block; text-align: left; margin-top: 20px; }
        li { background: white; padding: 10px 15px; margin: 5px 0; border: 1px solid #ddd; border-radius: 4px; width: 300px; }
    </style>
</head>
<body>

    <h1>Aplikacja z dwoma plikami PHP</h1>

    <form method="POST">
        <button type="submit" name="zapisz">Kliknij i zapisz w bazie</button>
    </form>

    <h3>Ostatnie wpisy z bazy danych:</h3>
    <ul>
        <?php while($wiersz = mysqli_fetch_assoc($wyniki)): ?>
            <li><strong>ID:</strong> <?php echo $wiersz['id']; ?> | <strong>Czas:</strong> <?php echo $wiersz['czas']; ?></li>
        <?php endwhile; ?>
    </ul>

</body>
</html>