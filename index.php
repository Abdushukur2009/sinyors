<?php
date_default_timezone_set('Asia/Tashkent');
$set = date('h:i:s');
session_start();
include $conf['view2']."db.php";
include  $conf['view2']."url.php";
require  $conf['view']."layouts/main.php";
?>