<?php
try {
    // Connessione al database
    $pdo = new PDO("mysql:host=localhost;dbname=libreria", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recupero dati dal form
    $name = $_POST['name'] ?? null;
    $autore = $_POST['autore'] ?? null;
    $nuovoPrezzo = $_POST['prezzoNuovo'] ?? null;

    // Verifica se i dati sono stati inseriti
    if (empty($name) || empty($autore) || empty($nuovoPrezzo)) {
        echo "<div class='catDespair'>
            OPERAZIONE NON RIUSCITA, CONTROLLA I DATI INSERITI
            </div>";
    } elseif (!is_numeric($nuovoPrezzo) || $nuovoPrezzo <= 0) {
        echo "<div class='catDespair'>
            INSERIRE UN PREZZO VALIDO
            </div>";
    } else {
        // Query di aggiornamento
        $sql = "UPDATE libri SET prezzo = :prezzo WHERE titolo = :name AND autore = :autore";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':prezzo' => $nuovoPrezzo,
            ':name' => $name,
            ':autore' => $autore
        ]);

        // Controllo se è stato eliminato almeno un record
        if ($stmt->rowCount() > 0) {
            echo "<div class='no_errore'>
                UPDATE ESEGUITO
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