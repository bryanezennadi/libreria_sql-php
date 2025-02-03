<?php
try {
// Query per ottenere i libri dal database, includendo la data di pubblicazione
$query = $db->query("SELECT id_libro, titolo, autore, genere, prezzo, data FROM libri ORDER BY titolo ASC");
$libri = $query->fetchAll();
} catch (PDOException $e) {
echo "<div class='error'>Errore: " . $e->getMessage() . "</div>";
exit;
}
?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Titolo</th>
        <th>Autore</th>
        <th>Genere</th>
        <th>Prezzo</th>
        <th>Data di Pubblicazione</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($libri as $libro): ?>
        <tr>
            <td><?= htmlspecialchars($libro->id_libro) ?></td>
            <td><?= htmlspecialchars($libro->titolo) ?></td>
            <td><?= htmlspecialchars($libro->autore) ?></td>
            <td><?= htmlspecialchars($libro->genere) ?></td>
            <td>€<?= number_format($libro->prezzo, 2, ',', '.') ?></td>
            <td><?= date('d-m-Y', strtotime($libro->data)) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>