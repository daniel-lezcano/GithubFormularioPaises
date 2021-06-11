<?php

include('db.php');

if (isset($_POST['Enviar'])) {
  $Codigo_dane = $_POST['Codigo_dane'];
  $nombre = $_POST['nombre'];
  $Tipo_gobierno = $_POST['Tipo_gobierno'];
  $Num_poblacion = $_POST['Num_poblacion'];
  $Moneda = $_POST['Moneda'];
  $Num_departamentos = $_POST['Num_departamentos'];
  $Sector_economico = $_POST['Sector_economico'];
  $query = "INSERT INTO formulario(Codigo_dane, nombre, Tipo_gobierno, Num_poblacion, Moneda, Num_departamentos, Sector_economico) VALUES ('$Codigo_dane', '$nombre', '$Tipo_gobierno', '$Num_poblacion', '$Moneda', '$Num_departamentos', '$Sector_economico')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Formulario guardado correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
