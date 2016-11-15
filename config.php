<?php
/* Author: Mario Alexis Gonzalez Sepulveda  - E-Mail: necrillo@gmail.com - Twitter: @necrillo  */
spl_autoload_register(function ($className) {
        $ds = DIRECTORY_SEPARATOR;
        $dir = __dir__;
        /* Reemplaza el separador de namespace por el de directorio */
        $className = str_replace('\\', $ds, $className);
        /* Armo el nombre completo del archivo de clase a buscar */
        $file = "{$dir}{$ds}{$className}.class.php";
        // get file if it is readable
        if (is_readable($file)) require_once $file;
        //echo $file;
    });

define('RUTA','/hermes/bosnaweb14a/b1759/ipg.happyworldhospicioco/potato_web');
//echo "Se cargo config.php";
 ?>
