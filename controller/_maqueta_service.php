<?php
require '../config.php';
session_start();

switch($_GET['action']) {
  case 'post_test':
  post_test();
  break;
  case 'get_test':
  get_test();
  break;
}

function post_test() {
  $data = json_decode(file_get_contents("php://input"));
  $result = $data.value;
  echo json_encode($result);
}
function get_test() {
  $result = 'Get Works!';
  echo json_encode($result);
}
?>
