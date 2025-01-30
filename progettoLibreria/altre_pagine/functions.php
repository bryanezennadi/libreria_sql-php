<?php function isActive($page){

return ($_SERVER['PHP_SELF'] === $page) ? "nav-linkAttivo" : "nav-link";

}


?>
