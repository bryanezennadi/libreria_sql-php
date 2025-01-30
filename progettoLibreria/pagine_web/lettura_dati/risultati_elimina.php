<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminazione Libro</title>
    <link rel="stylesheet" href="../styleForm.css"> <!-- Collegamento al CSS -->
</head>
<body>
<?php
try {
    // Connessione al database
    $pdo = new PDO("mysql:host=localhost;dbname=libreria", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recupero dati dal form
    $name = $_POST['name'] ?? null;
    $autore = $_POST['autore'] ?? null;

    // Verifica se i dati sono stati inseriti
    if (empty($name) || empty($autore)) {
        echo "<div class='catDespair'>
            OPERAZIONE NON RIUSCITA, CONTROLLA I DATI INSERITI
            </div>";
    } else {
        // Query di eliminazione
        $sql = "DELETE FROM libri WHERE titolo = :name AND autore = :autore";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':autore' => $autore
        ]);

        // Controllo se è stato eliminato almeno un record
        if ($stmt->rowCount() > 0) {
            echo "<div class='no_errore'>
                LIBRO ELIMINATO CON SUCCESSO
                </div>";
        } else {
            echo "<div class='catDespair'>
                NESSUN LIBRO TROVATO CON QUESTO TITOLO E AUTORE
                </div>";
        }
    }
} catch (PDOException $e) {
    echo "<div class='catDespair'>
        ERRORE: " . $e->getMessage() . "
        </div>";
}
?>

<button class="bottonespeciale"><a href="../index.php">Torna alla Home</a></button>
</body>
</html>

