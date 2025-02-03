<?php
try {
    // Connessione al database
    $pdo = new PDO("mysql:host=localhost;dbname=libreria", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recupero dei dati dal form
    $data = $_POST['data'] ?? null;
    $name = $_POST['name'] ?? null;
    $genere = $_POST['genere'] ?? null;
    $autore = $_POST['autore'] ?? null;
    $prezzo = $_POST['prezzo'] ?? null;

    // Verifica se tutti i dati sono presenti
    if (empty($data) || empty($name) || empty($genere) || empty($autore) || empty($prezzo)) {
        echo "<div class='catDespair'>
            OPERAZIONE NON RIUSCITA, CONTROLLA I DATI INSERITI
            </div>";
    }
    elseif (!is_numeric($prezzo) || $prezzo <= 0) {
        echo "<div class='catDespair'>
            INSERIRE UN PREZZO VALIDO
            </div>";}
    else {
        // Query di inserimento
        $sql = "INSERT INTO libri (titolo, autore, genere, prezzo, data) 
                    VALUES (:name, :autore, :genere, :prezzo, :data)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':autore' => $autore,
            ':genere' => $genere,
            ':prezzo' => $prezzo,
            ':data' => $data
        ]);

        echo "<div class='no_errore'>
            OPERAZIONE RIUSCITA
            </div>";
    }
} catch (PDOException $e) {
    echo "<div class='catDespair'>
        ERRORE: " . $e->getMessage() . "
        </div>";
}
