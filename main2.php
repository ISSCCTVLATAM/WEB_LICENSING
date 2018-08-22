<?php

    // Para saber si sí hizo login o no. Esto se necesita poner en todas las
    // subpáginas para que no entre si no ha hecho login

    session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
        
		exit;
    }
?>


<html>
    <body>
        <center>
            <button><a href="login.php?logout">Logout</a></button>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1><strong>Bienvenido! <br><?php echo $_SESSION['full_name']."<br>".$_SESSION['user_email']; ?></strong></h1>
        </center>
    </body>
</html>