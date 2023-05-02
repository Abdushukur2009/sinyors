<?php
    require_once $conf['view']."layouts/header.php";
    if (!isset($_SESSION['user'])) {
        include $conf['view'].'view/home.php';
    }
    require_once $conf['view']."layouts/footer.php";


?>