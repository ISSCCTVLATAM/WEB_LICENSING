<?php

include('is_logged.php');

require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos

if(!empty($_POST['json']) && !empty($_POST['req_type']) && !empty($_POST['lic_type']) && !empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['company']) && !empty($_POST['mayorista']) && !empty($_POST['final_user']) && !empty($_POST['comments']) && !empty($_POST['project']))
{
    
    $actualDate = date("Y-m-d H:i:s");
    $uid = $_SESSION['user_id'];
    
    $querytosend = "SELECT count(*) AS numrows FROM `licensing`.`project` WHERE project_name='".$_POST['project']."'";
    echo '<p>'.$querytosend.'</p>';
    
    $count_query   = mysqli_query($con, $querytosend);
    $row = mysqli_fetch_array($count_query);
    $numrows = $row['numrows'];

    if($numrows <= 0)
    {
        $sql = "INSERT INTO licensing.project (project_id,project_name) VALUES (default,'".$_POST['project']."')";
        echo '<p>'.$sql.'</p>';
        $query_new_insert = mysqli_query($con,$sql);
    }
    
    $querytosend = "SELECT project_id FROM `licensing`.`project` WHERE project_name='".$_POST['project']."'";
    echo '<p>'.$querytosend.'</p>';
    $count_query   = mysqli_query($con, $querytosend);
    $row = mysqli_fetch_array($count_query);
    $id_project = $row['project_id'];
    
    
    $sql = "INSERT INTO `licensing`.`license` (`id`,`request_user_id`,`admin_user_id`,`project_id`,`active`,`request_type`,`license_type`,`date_requested`,`start_date`,`end_date`,`comment`,`license_details`) VALUES(default,".$uid.",NULL,'".$id_project."',FALSE,'".$_POST['req_type']."','".$_POST['lic_type']."','".$actualDate."',NULL,NULL,'".$_POST['comments']."','".$_POST['json']."');";
    echo '<p>'.$sql.'</p>';
    $query_new_insert = mysqli_query($con,$sql);

    
}
else
{
    echo '<script>alert("Error on POST);</script>';
}