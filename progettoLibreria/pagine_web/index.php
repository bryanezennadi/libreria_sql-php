<?php
$db = new PDO('mysql:host=localhost;dbname=libreria', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
require "../altre_pagine/functions.php";
include "../altre_pagine/header.php";
$titolo = "home";
$path_style="../altre_pagine/style.css"
?>

<body>
<?php require_once "./componenti/navbar.php" ?>
<?php require_once "./componenti/cards.php" ?>
<?php require_once "./componenti/footer.php"; ?>

</body>
</html>
