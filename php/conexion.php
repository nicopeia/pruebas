<?php


function getConn(){
    
    $mysqli = mysqli_connect('localhost', 'root', '', 'reproduccion_listas');

    if (mysqli_connect_errno($mysqli )) {
        echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }else{
        echo "conectado";
        $mysqli->set_charset('utf8');
        return $mysqli;
    
    }
}






