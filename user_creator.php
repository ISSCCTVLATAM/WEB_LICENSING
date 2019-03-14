<?php
   \ session_start();
    if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1 AND $_SESSION['user_type']!=1) {
        header("location: login.php");        
    exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="materialize/css/securos.css" media="screen,projection">
        <link rel="stylesheet" type="text/css" href="materialize/css/issTy.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script>
            function selector(valor){
                if(valor=="1"){
                    document.getElementById("nombre").style.display = "block";
                    document.getElementById("correo").style.display = "block";
                    document.getElementById("usuario").style.display = "block";
                    document.getElementById("contraseña").style.display = "block";
                    document.getElementById("rcontraseña").style.display = "block";
                    document.getElementById("btnAdmin").style.display = "block";
                    document.getElementById("empresa").style.display = "none";
                    document.getElementById("telefono").style.display = "block";
                    document.getElementById("btnCliente").style.display = "none";
                }
                if(valor=="0"){
                    document.getElementById("nombre").style.display = "block";
                    document.getElementById("correo").style.display = "block";
                    document.getElementById("usuario").style.display = "block";
                    document.getElementById("contraseña").style.display = "block";
                    document.getElementById("rcontraseña").style.display = "block";
                    document.getElementById("btnAdmin").style.display = "none";
                    document.getElementById("empresa").style.display = "block";
                    document.getElementById("telefono").style.display = "block";
                    document.getElementById("btnCliente").style.display = "block";

                }
            }
        </script>
    </head>
    <body>
        <nav class="securos-colorb">
    <div class="nav-wrapper">
      <a href="main.php"><img src="img/iss_logo_en_horizontal_blue.png" class="brand-logo responsive-img" style="border-radius: 10px;" height="150px" width="200px" /></a>
      <span href="main.php" class="brand-logo center iss hide-on-small-only">License Control Panel</span>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#modal0" class="modal-trigger"><i class="material-icons right">search</i>Search HRU</a></li>
        <li><a href="#!" class="modal-trigger"><i class="material-icons right">person_add</i>Create Account</a></li>
        <li><a href="login.php?logout"><i class="material-icons right">close</i>Log out</a></li>
      </ul>
    </div>
    
  </nav><br> 
  <!-- Modal Structure -->
  <div id="modal0" class="modal">
    <div class="modal-content">
      <h4>Search license by HRU</h4>
      <p>Please write HRU to search in databases.
    <br><br>
    <div class="row">
      <div class="input-field col s12 m12 l12">
          <input id="searchHRU" type="text" class="validate">
          <label for="searchHRU">HRU</label>
          </div>
    </div>
      </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">cancel</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat securos-colorb white-text">Search</a>
    </div>
  </div>
  <!--SIDENAV-->
  <ul id="slide-out" class="side-nav securos-colorb">    
      <li>
        <div class="user-view">
          <a href="#main.php"><img class="responsive-img" src="img/iss_logo_en_horizontal_blue.png"></a>
          <a><span class="white-text name"><?php echo $_SESSION['full_name'];?></span></a>
          <a><span class="white-text email"><?php echo $_SESSION['user_email'];?></span></a>
        </div>
      </li>
       <div class="divider"></div>
       <li><a class="flow-text white-text"><i class="material-icons white-text">arrow_drop_down</i>Options Menu</a></li>
      <li><a href="key-register-form.php" class="white-text"><i class="white-text material-icons">create</i>Register License</a></li>
        <li><a href="#!" class="white-text"><span class="new badge red">4</span><i class="white-text material-icons">delete_forever</i>Licenses about to expire</a></li>
        <li><a href="mailto:?Subject=License%20Request%20Form&amp;body=Hello,%0D%0A%0D%0AClick%20the%20link%20to%20make%20a%20license%20request.%20Please%20read%20carefully%20and%20fill%20all%20required%20data:%0D%0A%0D%0ALINK:%20http://issivs.com/weblic/key-request-form.php" target="_top" class="white-text"><i class="white-text material-icons">contact_mail</i>Send license request</a></li>
         <li><a href="#!" class="white-text"><i class="white-text material-icons">group</i>Client list</a></li>
         <li>
           <ul class="collapsible">
          <li>
            <div class="collapsible-header white-text">&nbsp;&nbsp;&nbsp;<i class="material-icons white-text">search</i>&nbsp;&nbsp;&nbsp;Search</div>
            <div class="collapsible-body">
              <ul class="collection">
                <a href="#!" class="collection-item">Search by HRU</a>
                <a href="#!" class="collection-item">Search by Client</a>
            </ul>
            </div>
          </li>
        </ul>
      </li>
        <!--<li><a href="{{ URl('/development') }}" class="white-text"><i class="white-text material-icons">book</i>Reports</a></li>-->
      <li><div class="divider"></div></li>
    </ul>
    <div class="fixed-action-btn">
    <a href="#" data-activates="slide-out" class="orange pulse securos-color btn-floating btn-large button-collapse">
      <i class="large material-icons">menu</i>
    </a>    
 </div> 
<!--FIN SIDENAV-->
<div class="section white">
      <div class="row container">
        <h2 class="header">Create New Account</h2>
        <p class="grey-text text-darken-3 lighten-3 flow-text"><b>Administrator</b> accounts are only for ISS internal use.<br> <b>Client</b> accounts should only be created once a project has been set.</p>
      </div>
</div>
<div class="row">
    <div class="col s12 m3 l3"></div>
    <div class="col s12 m6 l6"> <label>Type of account</label>
                                    <select class="browser-default" id="admin" onchange="selector((this.value))">
                                        <option value="#" selected>---</option>
                                        <option value="1">Administrator</option>
                                        <option value="0">Client</option>
                                    </select></div>
    <div class="col s12 m3 l3"></div>                   
</div>
<div class="row" style="display:none;" id="nombre">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="full_name" type="text" class="validate"><label for="full_name">Full name</label></div>
    <div class="col s12 m3 l3"></div>    
</div>
<div class="row" style="display:none;" id="correo">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="mail" type="text" class="validate"><label for="mail">Enterprise mail</label></div>
    <div class="col s12 m3 l3"></div>
</div>
<!--DATOS CLIENTE-->
<div class="row" style="display:none;" id="empresa">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="company" type="text" class="validate"><label for="company">Enterprise</label></div>
    <div class="col s12 m3 l3"></div>
</div>
<div class="row" style="display:none;" id="telefono">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="telephone" type="text" class="validate"><label for="telephone">Phone number</label></div>
    <div class="col s12 m3 l3"></div>
</div>
<!--FIN DATOS CLIENTE-->
<div class="row" style="display:none;" id="usuario">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="username" type="text" class="validate"><label for="username">Username</label></div>
    <div class="col s12 m3 l3"></div>
</div>    
<div class="row" style="display:none;" id="contraseña">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="password" type="password" class="validate"><label for="password">Password</label></div>
    <div class="col s12 m3 l3"></div>
</div>
<div class="row" style="display:none;" id="rcontraseña">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="passwordr" type="password" class="validate"><label for="mail">Confirm password</label></div>
    <div class="col s12 m3 l3"></div>
</div><br>
<div class="row" style="display:none;" id="btnAdmin">
    <div class="col s12 m3 l3"></div>
    <div class="col s12 m6 l6 center-align"><button class="btn securos-colorb waves-effect" id="submit_btn" href="#">Create Administrator account</button></div>
    <div class="col s12 m3 l3"></div>
</div>
<div class="row" style="display:none;" id="btnCliente">
    <div class="col s12 m3 l3"></div>
    <div class="col s12 m6 l6 center-align"><button class="btn orange waves-effect" id="submit_btn" href="#">Create client account</button></div>
    <div class="col s12 m3 l3"></div>
</div>
<div class="row">
    <div class="col s12 m3 l3"></div>
    <div class="col s12 m6 l6 center-align"><span id="output"></span></div>
    <div class="col s12 m3 l3"></div>
</div>
<footer class="page-footer securos-colorb">
            <div class="footer-copyright">
               <div class="container">
                © 2019 Intelligent Security Systems
                <a class="grey-text text-lighten-4 right" href="http://isscctv.com/">ISS Site</a>
                </div>
            </div>
    </footer>
       
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="materialize/js/securos.js"></script>
        <script>
            $("#submit_btn").click(function(event){
                //alert("Working");
                var parametros = "firstname=" + document.getElementById("full_name").value + "&user_name=" + document.getElementById("username").value + "&user_email=" + document.getElementById("mail").value + "&is_admin=" + $("#admin")[0].selectedIndex + "&user_password_new=" + document.getElementById("password").value + "&user_password_repeat=" + document.getElementById("passwordr").value + "&phone=" + document.getElementById("telefono").value;
                //alert(parametros);
               $.ajax({
                  type: "POST",
                    url: "ajax/create_user.php",
                    data: parametros,
                     beforeSend: function(objeto){
                        $("#output").html('<img src="./img/ajax-loader.gif"> Cargando...');
                      },
                    success: function(datos){
                        //alert("Finished");
                        $("#output").html(datos);
                    }
               }); 
            });
        </script>
    </body>
</html>
