<?php

    // Check login. Please use this in all pages created

    session_start();
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
        
    exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME | ISSIVS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="materialize/css/securos.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="materialize/css/issTy.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body onload="initializeSearch()">
	<nav class="securos-colorb">
    <div class="nav-wrapper">
      <img src="img/iss_logo_en_horizontal_blue.png" class="brand-logo responsive-img" style="border-radius: 10px;" height="150px" width="200px" />
      <span href="#!" class="brand-logo center iss hide-on-small-only">Licensing Control Panel</span>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#modal0" class="modal-trigger"><i class="material-icons right">search</i>Search HRU</a></li>
        <li><a href="user_creator.php" class="modal-trigger"><i class="material-icons right">person_add</i>Create Account</a></li>
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
  <div class="row">
    <div class="col s12 m12 l12">
       <div class="section white">
      <div class="row container">
        <h2 class="header">Last added licenses</h2>
        <p class="grey-text text-darken-3 lighten-3">View of the last added licenses into the system.</p>
      </div>
    </div>
      <table class="striped responsive-table centered">
        <thead>
          <tr>
              <th>Project</th>
              <th>Main HRU</th>
              <th>User who requests</th>
              <th>Enterprise</th>
              <th>Comments</th>
              <th>Additional info</th>
          </tr>
        </thead>

        <tbody id="datain">
         
            <!-- Generated by Query!!!! -->
            
        </tbody>
      </table>
    </div>
  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal ">
    <div class="modal-content">
      <h4>License details</h4>
      <p>Detailed info related to license.
        <div class="divider"></div>
    <br>
    <div class="row">
      <div class="col s12 m4 l4">
          <label >Client: </label><h5>MAGNA</h5>
      </div>
      <div class="col s12 m4 l4">
          <label >Project: </label><h5>MAGNA Mecanismos Face</h5>
      </div>
      <div class="col s12 m4 l4"><label >Email: </label><h5>soporte@magna.com</h5></div>
    </div>
    <div class="row">
      <div class="col s12 m8 l8">
        <label >Configuration HRU: </label><h5>C15C34D9E219A19C65825F29C4D00B7F</h5>
      </div>
      <div class="col s12 m4 l4"><label >Number of change: </label><h5>1</h5></div>
    </div>
    <div class="row">
      <div class="col s12 m3 l3"><label >Creation date: </label><h5>12-07-2018</h5></div>
      <div class="col s12 m3 l3"><label >Start date: </label><h5>12-07-2018</h5></div>
      <div class="col s12 m3 l3"><label >End date: </label><h5>12-10-2018</h5></div>
      <div class="col s12 m3 l3"><label >Days left: </label><h5>180 days</h5></div>
    </div>
    <div class="row">
      <div class="col s12 m3 l3"><label >Product types: </label><h5>Enterprise</h5></div>
      <div class="col s12 m3 l3"><label >SecurOS version: </label><h5>10.2</h5></div>
      <div class="col s12 m3 l3"><label >Language: </label><h5>English</h5></div>
      <div class="col s12 m3 l3"><label >Country: </label><h5>Mexico</h5></div>
    </div>
    <div class="row">
      <div class="col s12 m3 l3"><label >Serial/ID: </label><h5>9089956</h5></div>
      <div class="col s12 m6 l6"><label >Comments: </label><h5>Urgent request</h5></div>
      <div class="col s12 m3 l3"><label >User who requests: </label><h5>Aglahir Jimenez</h5></div>
    </div>
      </p>
      <div class="divider"></div>
      <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat securos-colorb white-text">Ready</a>
    </div>
    </div>
  </div>





	<footer class="page-footer securos-colorb">
	        <div class="footer-copyright">
	           <div class="container">
	            © 2019 Intelligent Security Systems
	            <a class="grey-text text-lighten-4 right" href="http://isscctv.com/">ISSIVS Site</a>
	            </div>
	        </div>
	</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="materialize/js/securos.js"></script>


<script>
    function initializeSearch()
    {
        $.ajax({
                  type: "POST",
                    url: "ajax/get_new_licenses_requests.php",
                    data: "",
                     beforeSend: function(objeto){
                        // Display loading gif
                      },
                    success: function(datos){
                        $("#datain").html(datos);
                        eval("updateTable(jsonin);");
                    }
               }); 
    }
    
    function updateTable(jsonvar)
    {
        // Proyecto | HRU Principal | Creador | Comentario | Detalles
        
        /*
            document.getElementById("datain").innerHTML += "<tr>";
            for(var it in jsonin[i]){
                document.getElementById("datain").innerHTML += "<td>";
                console.log(jsonin[i][it]);
                document.getElementById("datain").innerHTML += jsonvar[i][it];
                document.getElementById("datain").innerHTML += "</td>";
                console.log("JUMP");
            }
            document.getElementById("datain").innerHTML += "</tr>";
        */
        
        for(var i=0;i<jsonin.length;i++)
        {
            console.log(i);
            var modalid = i+1;
            document.getElementById("datain").innerHTML += "<tr><td>" + jsonvar[i]["project_name"] + "</td><td>" + JSON.parse(jsonin[i]["license_details"])["servers"][0]["hru"] + "</td><td>" + jsonvar[i]["name"] + "</td><td>" + jsonvar[i]["integrator_id"] + "</td><td>" + jsonvar[i]["comment"] + "</td><td><a href=\"#modal" + modalid + "\" class=\"btn waves-effect waves-ligh modal-trigger\">+INFO</a></td></tr>";
        }
        
    }
</script>
	
</body>
</html>