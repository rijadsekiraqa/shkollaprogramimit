<?php

use Admin\Lib\Session;

require_once("autoloader.php");
$session = new Session();
$session->logout();
header("Location: ../login.php");
?>