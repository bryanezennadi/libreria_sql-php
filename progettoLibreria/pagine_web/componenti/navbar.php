<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class=<?= isActive('/uda_5^F/progettoLibreria/pagine_web/index.php')?> aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class=<?= isActive('/uda_5^F/progettoLibreria/pagine_web/inserisci.php')?> href="./inserisci.php">Inserisci</a>
                </li>
                <li class="nav-item">
                    <a class=<?= isActive('/uda_5^F/progettoLibreria/pagine_web/elimina.php')?> href="./elimina.php">Elimina</a>
                </li>
                <li class="nav-item">
                    <a class=<?= isActive('/uda_5^F/progettoLibreria/pagine_web/modifica.php')?> href="./modifica.php">modifica</a>
                </li>
                <li class="nav-item">
                    <a class=<?= isActive('/uda_5^F/progettoLibreria/pagine_web/visualizza.php')?> href="./visualizza.php">Visualizza</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
