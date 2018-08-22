<?php
   require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
   require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos

    $q=$_REQUEST["in"];
    $sql="SELECT enterprise_name FROM licensing.enterprise WHERE enterprise_name LIKE '%$q%'";

    $result = mysqli_query($con,$sql);
    $json=array();

    while($row = mysqli_fetch_array($result)) {
      array_push($json, $row['enterprise_name']);
    }

    echo json_encode($json);
?>
