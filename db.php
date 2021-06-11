<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'prog3_parcial'
) or die(mysqli_erro($mysqli));

?>
