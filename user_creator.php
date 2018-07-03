<?php
    
?>

<html>
    <head>
        <meta charset="utf-8">
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
                <center>
                <table width="30%" height="50%">
                    <tr>
                        <td colspan="2"><center><h1>Solo propósitos de desarrollo, esto no es oficial</h1></center></td>
                    </tr>
                    <tr>
                        <td>Nombre completo</td><td><center><input id="full_name" type="text"></center></td>
                    </tr>
                    <tr>
                        <td>Email</td><td><center><input id="mail" type="text"></center></td>
                    </tr>
                    <tr>
                        <td>Usuario</td><td><center><input id="username" type="text"></center></td>
                    </tr>
                    <tr>
                        <td>Contraseña</td><td><center><input id="password" type="password"></center></td>
                    </tr>
                    <tr>
                        <td>Repita Contraseña</td><td><center><input id="passwordr" type="password"></center></td>
                    </tr>
                    <tr>
                        <td>Administrador</td><td><center><select id="admin"><option value="1">Sí</option><option value="0">No</option></select></center></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br><br>
                            <center><button id="submit_btn" href="#">¡Crear Usuario!</button></center>
                        </td>
                    </tr>
                </table>
                <table width="50%" height="50%">
                    <tr>
                        <td><center id="output"></center></td>
                    </tr>
                </table>
            </center>
        </div>
    </body>
</html>
<script>
    $("#submit_btn").click(function(event){
        alert("Working");
        var parametros = "firstname=" + document.getElementById("full_name").value + "&user_name=" + document.getElementById("username").value + "&user_email=" + document.getElementById("mail").value + "&is_admin=" + document.getElementById("admin").value + "&user_password_new=" + document.getElementById("password").value + "&user_password_repeat=" + document.getElementById("passwordr").value;
        alert(parametros);
       $.ajax({
          type: "POST",
			url: "ajax/create_user.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#output").html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
			success: function(datos){
                alert("Finished");
                $("#output").html(datos);
		    }
       }); 
    });
</script>