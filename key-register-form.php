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
	<title>Register key | ISS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="materialize/css/securos.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="materialize/css/issTy.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<nav class="securos-colorb">
    <div class="nav-wrapper">
      <a href="main.php"><img src="img/iss_logo_en_horizontal_blue.png" class="brand-logo responsive-img" style="border-radius: 10px;" height="150px" width="200px" /></a>
      <span href="#!" class="brand-logo center iss hide-on-small-only">Licensing Control Panel</span>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#modal1" class="modal-trigger"><i class="material-icons right">search</i>Search HRU</a></li>
        <li><a href="user_creator.php" class="modal-trigger"><i class="material-icons right">person_add</i>Create Account</a></li>
        <li><a href="#!"><i class="material-icons right">close</i>Log out</a></li>
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
		<div class="container">
			<div class="section white">
		      <div class="row container">
		        <h2 class="header">Register License</h2>
		        <p class="grey-text text-darken-3 lighten-3 flow-text">Licensing Control. Update fields corresponding to licensing <b>KEY</b> given by the license creation platform.</p>
		      </div>
		    </div>
			<div class="row">
				<div class="input-field col s12 m4 l4">
					<input id="hru" type="text" class="validate">
					<label for="hru">Main server HRU</label>
			    </div>
			    <div class="col s12 m4 l4">
			    	<center><button class="btn waves-effect waves-light securos-colorb" type="submit" id="buscarSoli" name="action">Search request
				    <i class="material-icons right">send</i>
				  </button></center>
			    </div>
			    <div class="col s12 m4 l4">
			    	<center><button class="btn waves-effect waves-light securos-colorb" type="submit" id="addPeriferico" name="action">Add peripheral server HRU
				    <i class="material-icons right">plus_one</i>
				  </button></center>
			    </div>
			</div>
			<div class="row" id="cont-addPeriferico"></div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
				    <input id="fechaCreacion" type="text" onfocus="(this.type='date')" class="validate">
				    <label for="fechaCreacion">Creation date</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					          <input id="fechaInicio" type="text" onfocus="(this.type='date')" class="validate">
					          <label for="fechaInicio">Start date</label>
				</div>
				<div class="input-field col s12 m6 l6">
					          <input id="fechaTermino" type="text" onfocus="(this.type='date')" class="validate">
					          <label for="fechaTermino">End date</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
								<label>License owner (client)</label>
								<select class="browser-default" id="cliente">
					                <option value="" disabled selected>Select client</option>
								    <option value="SIAYEC">SIAYEC</option>
								    <option value="ZULU">ZULU</option>
								    <option value="MAGNA">MAGNA</option>
								    <option value="PEÑOLES">PEÑOLES</option>
								  </select>
				</div>
				<div class="input-field col s12 m6 l6">
					    <input id="proyecto" type="text" class="validate">
					    <label for="proyecto">Project name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="email" type="email" class="validate">
					<label for="email">Client mail</label>
			    </div>
			</div>
			<div class="row">
				<div class="input-field col s12 m4 l4">
					<input id="serial" type="text" class="validate">
					<label for="serial">Serial / ID</label>
			    </div>
			    <div class="input-field col s12 m4 l4">
					<input id="pais" type="text" class="validate">
					<label for="pais">Country</label>
			    </div>
			    <div class="col s12 m4 l4">
			    	<label>License language</label>
						<select class="browser-default" id="idioma">
					        <option value="" disabled selected>Select language</option>
							<option value="spanish">Spanish</option>
							<option value="english">English</option>
						</select>				
			    </div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
			    	<label>SecurOS version</label>
						<select class="browser-default" id="version">
					        <option value="" disabled selected>Choose version</option>
							<option value="10">10.x</option>
							<option value="9">9.x</option>
						</select>				
			    </div>
			    <div class="col s12 m6 l6">
			    	<label>Product type</label>
						<select class="browser-default" id="producto">
					        <option value="" disabled selected>Choose product type</option>
							<option value="Xpress">Xpress</option>
							<option value="Professional">Professional</option>
							<option value="Premium">Premium</option>
							<option value="Enterprise">Enterprise</option>
							<option value="MCC">MCC</option>
						</select>				
			    </div>
			</div>
			<div class="row">
				
			    <div class="input-field col s12 m12 l12">
					<input id="comentario" type="text" class="validate">
					<label for="comentario">Comments</label>
			    </div>
			</div>
			<div class="center">
				<button class="btn waves-effect waves-light securos-colorb" type="submit" id="registroLic" name="action">Register license
				    <i class="material-icons right">send</i>
				  </button>
			</div>
		</div>
	<br><br>
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
	<script type="text/javascript">
		var nPeriferico=0;
        $('#addPeriferico').click(function(){
              nPeriferico++;
            //$('#cont-addServer').append('<div id='+ndivs+'><p>DIV id:'+ndivs+'</p></div>');
            $('#cont-addPeriferico').append('<div class="input-field col s12 m12 l12"> <input id="hruPeriferico'+nPeriferico+'" type="text" class="validate"> <label for="hru">Codigo HRU Periferico '+nPeriferico+'</label> </div>');
        });
	</script>
</body>
</html>