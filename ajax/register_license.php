<?php

require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos

if(!empty($_POST['json']) && !empty($_POST['req_type']) && !empty($_POST['lic_type']) && !empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['company']) && !empty($_POST['mayorista']) && !empty($_POST['final_user']) && !empty($_POST['comments']) && !empty($_POST['project']))
{
    $actualDate = date("Y-m-d H:i:s");
    
    // Search for project, if doesnt exists, create one
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
    
    // Search for enterprises, if doesnt exist, create them
    
    
    // Integrator
    $querytosend = "SELECT count(*) AS numrows FROM `licensing`.`enterprise` WHERE enterprise_name='".$_POST['company']."'";
    echo '<p>'.$querytosend.'</p>';
    
    $count_query   = mysqli_query($con, $querytosend);
    $row = mysqli_fetch_array($count_query);
    $numrows = $row['numrows'];

    if($numrows <= 0)
    {
        $sql = "INSERT INTO licensing.enterprise (enterprise_id,enterprise_name,enterprise_type) VALUES (default,'".$_POST['company']."',2)";
        echo '<p>'.$sql.'</p>';
        $query_new_insert = mysqli_query($con,$sql);
    }
    
    $querytosend = "SELECT enterprise_id FROM `licensing`.`enterprise` WHERE enterprise_name='".$_POST['company']."'";
    echo '<p>'.$querytosend.'</p>';
    $count_query   = mysqli_query($con, $querytosend);
    $row = mysqli_fetch_array($count_query);
    $id_integrator = $row['enterprise_id'];
    
    
    // Wholesaler
    $querytosend = "SELECT count(*) AS numrows FROM `licensing`.`enterprise` WHERE enterprise_name='".$_POST['mayorista']."'";
    echo '<p>'.$querytosend.'</p>';
    
    $count_query   = mysqli_query($con, $querytosend);
    $row = mysqli_fetch_array($count_query);
    $numrows = $row['numrows'];

    if($numrows <= 0)
    {
        $sql = "INSERT INTO licensing.enterprise (enterprise_id,enterprise_name,enterprise_type) VALUES (default,'".$_POST['mayorista']."',3)";
        echo '<p>'.$sql.'</p>';
        $query_new_insert = mysqli_query($con,$sql);
    }
    
    $querytosend = "SELECT enterprise_id FROM `licensing`.`enterprise` WHERE enterprise_name='".$_POST['mayorista']."'";
    echo '<p>'.$querytosend.'</p>';
    $count_query   = mysqli_query($con, $querytosend);
    $row = mysqli_fetch_array($count_query);
    $id_wholesaler = $row['enterprise_id'];
    
    
    
    
    
    
    
    $sql = "INSERT INTO `licensing`.`license` (`id`,`admin_user_id`,`project_id`,`active`,`request_type`,`license_type`,`date_requested`,`start_date`,`end_date`,`comment`,`license_details`) VALUES(default,NULL,'".$id_project."',FALSE,'".$_POST['req_type']."','".$_POST['lic_type']."','".$actualDate."',NULL,NULL,'".$_POST['comments']."','".$_POST['json']."');";
    
    $sql = "INSERT INTO `license` (`id`, `admin_user_id`, `project_id`, `name`, `mail`, `integrator_id`, `final_user`, `wholesaler_id`, `active`, `request_type`, `license_type`, `date_requested`, `start_date`, `end_date`, `comment`, `license_details`) VALUES (default, NULL, '".$id_project."', '".$_POST['name']."', '".$_POST['mail']."', '".$id_integrator."', '".$_POST['final_user']."', '".$id_wholesaler."', FALSE,'".$_POST['req_type']."','".$_POST['lic_type']."','".$actualDate."',NULL,NULL,'".$_POST['comments']."','".$_POST['json']."')";
    
    echo '<p>'.$sql.'</p>';
    $query_new_insert = mysqli_query($con,$sql);

    
}
else
{
    echo '<script>alert("Error on POST<JSON:'.$_POST['json'].'><REQTYPE: '.$_POST['req_type'].'><LIC TYPE: '.$_POST['lic_type'].'><NAME: '.$_POST['name'].'><MAIL: '.$_POST['mail'].'><COMPANY: '.$_POST['company'].'><MAY: '.$_POST['mayorista'].'><FU: '.$_POST['final_user'].'><COMM: '.$_POST['comments'].'><P: '.$_POST['project'].'>");</script>';
}