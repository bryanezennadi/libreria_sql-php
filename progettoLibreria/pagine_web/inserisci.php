<?php
$db = new PDO('mysql:host=localhost;dbname=libreria', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
$titolo = "Pagina_Inserimento";
$path_style = "../altre_pagine/styleForm.css";
require "../altre_pagine/functions.php";
include "../altre_pagine/header.php";
?>
<body>
<?php require_once "./componenti/navbar.php" ?>
<?php require_once "./componenti/formInserimento.php"?>
<?php require_once "./componenti/footer.php"; ?>

</body>
</html>
