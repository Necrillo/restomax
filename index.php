<?php
/* Author: Mario Alexis Gonzalez Sepulveda  - E-Mail: necrillo@gmail.com - Twitter: @necrillo  */
ob_start();
$location = 'view/index.php';
header('Location:'.$location);
ob_end_flush();
?>
