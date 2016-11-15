<?php
/* Author: Mario Alexis Gonzalez Sepulveda  - E-Mail: necrillo@gmail.com - Twitter: @necrillo  */
namespace resources\configs;
use \PDO;

class tools{
  public static function dump($variable){
     echo '<pre>';
     print_r($variable);
     echo '</pre>';
  }
}

?>
