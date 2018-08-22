<?php

    // Para saber si sí hizo login o no. Esto se necesita poner en todas las
    // subpáginas para que no entre si no ha hecho login

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
      <span href="#!" class="brand-logo center iss hide-on-small-only">Panel de Control de Licencias</span>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#modal1" class="modal-trigger"><i class="material-icons right">search</i>Buscar HRU</a></li>
        <li><a href="user_creator.php" class="modal-trigger"><i class="material-icons right">person_add</i>Crear cuenta</a></li>
        <li><a href="#!"><i class="material-icons right">close</i>Salir</a></li>
      </ul>
    </div>
    
  </nav><br> 
	<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Buscar Licencia por HRU</h4>
      <p>Por favor ingresa el HRU a buscar en la plataforma.
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
    	<a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">cancelar</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat securos-colorb white-text">Buscar</a>
    </div>
  </div>
  <!--SIDENAV-->
	<ul id="slide-out" class="side-nav securos-colorb">	   
	    <li>
	    	<div class="user-view">
		      <a href="main.php"><img class="responsive-img" src="img/iss_logo_en_horizontal_blue.png"></a>
		      <a><span class="white-text name"><?php echo $_SESSION['full_name'];?></span></a>
          	  <a><span class="white-text email"><?php echo $_SESSION['user_email'];?></span></a>
		    </div>
	    </li>
	     <div class="divider"></div>
	     <li><a class="flow-text white-text"><i class="material-icons white-text">arrow_drop_down</i>Menú de opciones</a></li>
	    <li><a href="#!" class="white-text"><i class="white-text material-icons">create</i>Registrar Licencia</a></li>
	      <li><a href="#!" class="white-text"><span class="new badge red">4</span><i class="white-text material-icons">delete_forever</i>Keys por vencer</a></li>
	      <li><a href="mailto:?Subject=Formulario%20de%20Solicitud%20de%20Licencia&amp;body=Que%20tal,%0D%0A%0D%0AIngresa%20a%20la%20siguiente%20liga%20para%20solictar%20una%20licencia.%20Lee%20cuidadosamente%20y%20llena%20todos%20los%20campos%20que%20se%20te%20solicitan:%0D%0A%0D%0ALINK:%20http://localhost:8081/weblic/key-request-form.php" target="_top" class="white-text"><i class="white-text material-icons">contact_mail</i>Enviar solicitud de licencia</a></li>
	       <li><a href="#!" class="white-text"><i class="white-text material-icons">group</i>Lista de Cientes</a></li>
	       <li>
		       <ul class="collapsible">
			    <li>
			      <div class="collapsible-header white-text">&nbsp;&nbsp;&nbsp;<i class="material-icons white-text">search</i>&nbsp;&nbsp;&nbsp;Buscar</div>
			      <div class="collapsible-body">
			      	<ul class="collection">
				        <a href="#!" class="collection-item">Buscar por HRU</a>
        				<a href="#!" class="collection-item">Buscar por Cliente</a>
				    </ul>
			      </div>
			    </li>
			  </ul>
			</li>
		    <!--<li><a href="{{ URl('/development') }}" class="white-text"><i class="white-text material-icons">book</i>Reports</a></li>-->
	    <li><div class="divider"></div></li>
	  </ul>
  	<div class="fixed-action-btn">
    <a href="#" data-activates="slide-out" class="cyan pulse securos-color btn-floating btn-large button-collapse">
      <i class="large material-icons">menu</i>
    </a>    
 </div> 
<!--FIN SIDENAV-->
		<div class="container">
			<div class="section white">
		      <div class="row container">
		        <h2 class="header">Registro de Licencia</h2>
		        <p class="grey-text text-darken-3 lighten-3 flow-text">Control de Licenciamiento. Actualizar los campos con respecto a al <b>KEY</b> de licenciamiento otorgado por la plataforma de creación de licencias.</p>
		      </div>
		    </div>
			<div class="row">
				<div class="input-field col s12 m4 l4">
					<input id="hru" type="text" class="validate">
					<label for="hru">Codigo HRU del Servidor principal</label>
			    </div>
			    <div class="col s12 m4 l4">
			    	<center><button class="btn waves-effect waves-light securos-colorb" type="submit" id="buscarSoli" name="action">Buscar Solicitud
				    <i class="material-icons right">send</i>
				  </button></center>
			    </div>
			    <div class="col s12 m4 l4">
			    	<center><button class="btn waves-effect waves-light securos-colorb" type="submit" id="addPeriferico" name="action">Agregar HRU Periferico
				    <i class="material-icons right">plus_one</i>
				  </button></center>
			    </div>
			</div>
			<div class="row" id="cont-addPeriferico"></div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
				    <input id="fechaCreacion" type="text" onfocus="(this.type='date')" class="validate">
				    <label for="fechaCreacion">Fecha de creación</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					          <input id="fechaInicio" type="text" onfocus="(this.type='date')" class="validate">
					          <label for="fechaInicio">Fecha de inicio</label>
				</div>
				<div class="input-field col s12 m6 l6">
					          <input id="fechaTermino" type="text" onfocus="(this.type='date')" class="validate">
					          <label for="fechaTermino">Fecha de termino</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
								<label>Cliente asociado a esta licencia</label>
								<select class="browser-default" id="cliente">
					                <option value="" disabled selected>Seleccione al Cliente</option>
								    <option value="SIAYEC">SIAYEC</option>
								    <option value="ZULU">ZULU</option>
								    <option value="MAGNA">MAGNA</option>
								    <option value="PEÑOLES">PEÑOLES</option>
								  </select>
				</div>
				<div class="input-field col s12 m6 l6">
					    <input id="proyecto" type="text" class="validate">
					    <label for="proyecto">Nombre del Proyecto</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="email" type="email" class="validate">
					<label for="email">Correo electronico del Cliente</label>
			    </div>
			</div>
			<div class="row">
				<div class="input-field col s12 m4 l4">
					<input id="serial" type="text" class="validate">
					<label for="serial">Serial / ID</label>
			    </div>
			    <div class="input-field col s12 m4 l4">
					<input id="pais" type="text" class="validate">
					<label for="pais">Pais</label>
			    </div>
			    <div class="col s12 m4 l4">
			    	<label>Idioma para la Licencia</label>
						<select class="browser-default" id="idioma">
					        <option value="" disabled selected>Seleccione el idioma</option>
							<option value="español">Español</option>
							<option value="ingles">Ingles</option>
						</select>				
			    </div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
			    	<label>Versión de SecurOS</label>
						<select class="browser-default" id="version">
					        <option value="" disabled selected>Seleccione la versión</option>
							<option value="9">9.x</option>
							<option value="8">8</option>
						</select>				
			    </div>
			    <div class="col s12 m6 l6">
			    	<label>Tipo de producto</label>
						<select class="browser-default" id="producto">
					        <option value="" disabled selected>Seleccione el tipo de producto</option>
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
					<label for="comentario">Comentarios</label>
			    </div>
			</div>
			<div class="center">
				<button class="btn waves-effect waves-light securos-colorb" type="submit" id="registroLic" name="action">Registrar licencia
				    <i class="material-icons right">send</i>
				  </button>
			</div>
		</div>
	<br><br>
	<footer class="page-footer securos-colorb">
	        <div class="footer-copyright">
	           <div class="container">
	            © 2018 Intelligent Security Systems
	            <a class="grey-text text-lighten-4 right" href="http://isscctv.com/">Sitio ISS</a>
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