<?php


session_start();


session_unset();
session_destroy();


header("Location: loginM.php");
exit();

?>
