<?php
require "../altre_pagine/functions.php";
$db = new PDO('mysql:host=localhost;dbname=libreria', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
require "../altre_pagine/header.php";
require "./componenti/navbar.php";
?>
<div class="container">
    <h2>Lista dei Libri</h2>
    <?php require "./lettura_dati/visualizza_pagina.php"; ?>
</div>

<?php require "./componenti/footer.php"; ?>


