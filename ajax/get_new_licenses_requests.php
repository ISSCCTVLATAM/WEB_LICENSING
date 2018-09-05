<?php

include('is_logged.php');

require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos

$sql="SELECT id,name,mail,integrator_id,active,request_type,license_type,date_requested,comment,license_details,project_name FROM licensing.license JOIN project ON licensing.license.project_id = project.project_id WHERE admin_user_id IS NULL";

$result = mysqli_query($con,$sql);
$json=array();

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
    array_push($json, $row);
}

echo "<script>var jsonin = ".json_encode($json).";</script>";