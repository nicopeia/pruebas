<?php 
require_once 'conexion.php';

function getMusica(){
  $id = $_POST['id'];
  $mysqli = getConn();
  $query = "SELECT * FROM `videos` WHERE id_lista = $id";
  $result = $mysqli->query($query);
  $musica = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $musica .= "<option value='$row[id]'>$row[nombre]</option>";
  }
  return $musica;
}

echo getMusica();