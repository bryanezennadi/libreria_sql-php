<?php function isActive($page){

return (basename($_SERVER['PHP_SELF']) === $page) ? "nav-linkAttivo" : "nav-link";

}


?>
