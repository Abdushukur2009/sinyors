<?php
date_default_timezone_set('Asia/Tashkent');
$set = date('h:i:s');
session_start();
include "db.php";
include "url.php";
require __DIR__ . "/page/layouts/main.php";
?>