<?php
    require_once "header.php";
    if (!isset($_SESSION['user'])) {
        include $conf['view'].'home.php';
    }
    require_once "footer.php";


?>