<!DOCTYPE html>
<html>
<head>
	<title>Request Form | ISS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="materialize/css/securos.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="materialize/css/issTy.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	
	<nav class="securos-colorb z-depth-3">
	    <div class="nav-wrapper">
	      <img src="img/iss_logo_en_horizontal_blue.png" style="border-radius: 10px;" class="brand-logo responsive-img" height="100px" width="200px" />
	      <span href="#!" class="hide-on-small-only brand-logo center iss">Formulario de Solicitud de Licencia</span>	      
	    </div>
	</nav><br>
	<div class="row">
		<div class="col s12 m2 l2"></div>
		<div class="col s12 m8 l8">
			<div class="section white">
		      <div class="row">
		        <h2 class="header">Sección 1</h2>
		        <div class="divider"></div>
		        <p class="grey-text text-darken-3 lighten-3">Por favor, completa el formulario en su totalidad para evitar retrasos en la entrega de licencias.</p>
		      </div>
		    </div>		    
			<form method="POST" autocomplete="on">
				<div class="row" name="basic_data">
					<div class="row">
						<div class="input-field col s12 m6 l6">
				          <input id="nombre" name="nombre" type="text" class="validate">
				          <label for="nombre">Nombre del solicitante</label>
				        </div>
				        <div class="input-field col s12 m6 l6">
				          <input id="email" name="email" type="email" class="validate">
				          <label for="email">Correo electronico</label>
				        </div>
					</div>
					<div class="row">
				        <div class="input-field col s12 m6 l6">
				          <input id="empresa" name="empresa" type="text" class="validate">
				          <label for="empresa">Empresa</label>
				        </div>
				        <div class="input-field col s12 m6 l6">
				          <input id="mayorista" name="mayorista" type="text" class="validate">
				          <label for="mayorista">Mayorista</label>
				        </div>
					</div>
					<div class="row">
                        <div class="input-field col s12 m6 l6">
				          <input id="userFinal" name="user_final" type="text" class="validate">
				          <label for="userFinal">Usuario final</label>
				        </div>
				        <div class="input-field col s12 m6 l6">
				          <input id="project_name" name="project_name" type="text" class="validate">
				          <label for="project_name">Nombre del proyecto</label>
				        </div>
				    </div>
				    <div class="row">
				        <div class="col s12 m6 l6">
				        	<label>TIPO DE SOLICITUD</label>
							  <select class="browser-default" name="tipo_solicitud" id="select_type_request">
							    <option value="" disabled selected>Seleccione la opcion que solicita</option>
							    <option value="1">NUEVA LICENCIA</option>
							    <option value="2">UPGRADE</option>
							    <option value="3">RENOVACIÓN</option>
							    <option value="4">CAMBIO DE CONFIGURACIÓN</option>
							  </select>
				        </div>
				         <div class="col s12 m6 l6">
				        	<label>TIPO LICENCIA</label>
							  <select class="browser-default" name="tipo_licencia" id="select_type_license">
							    <option value="" disabled selected>Seleccione el tipo de licencia</option>
							    <option value="1">PERMANENTE</option>
							    <option value="2">DEMO KIT</option>
							    <option value="3">TEMPORAL</option>
							  </select>
				        </div>
			        </div>
				</div>
				<div class="section white">
			      <div class="row">
			        <h2 class="header">NOTAS</h2>
			        <div class="divider"></div>
			        <p class="grey-text text-darken-3 lighten-3">
			        	<ol>
			        		<li>Este formulario es válido para todas las solicitudes de claves de licencia (ISS key.iss, face.key.iss e iv_license).</li>
			        		<li>TODAS las solicitudes claves permanentes deben ser enviadas con la FACTURA (S) ISS asociadas. Si el formulario de solicitud no coincide con la(s) factura (s), habrá un retraso en la entrega de licencias</li>
			        		<li>Todas las solicitudes clave DEMO KIT deberá enviarse con una(s) FACTURA(S) ISS asociada.</li>
			        		<li>Todos los kits DEMO comprados cuentan con 180 días de licencia libremente renovable estándar.</li>
			        		<li>Todas las solicitudes de actualización, renovación o cambio de configuración deben incluir el archivo de claves existente(s).</li>
							<li>La entrega de la clave de licencia se dara en las proximas 24 a 48 horas posteriores a la solicitud de esta.</li>
			        	</ol>
			        </p>
			      </div>
			    </div>
			    <div class="divider"></div>
				<div class="section white">
			      <div class="row">
			        <h2 class="header">Seccion 2</h2>
			        <div class="divider"></div>
			        <p class="grey-text text-darken-3 lighten-3">Sólo se requiere para solicitar tipos de NUEVA LICENCIA. Por favor, especifique los siguientes parámetros licencia GLOBAL.<br><br>
			        <span style="font-size: 20px;" for="addServer">Agrega una fila (SOLO SI SE NECESITA MAS DE UN TIPO DE SOFTWARE):&nbsp;&nbsp;</span>  
			        <button class="btn waves-effect waves-light securos-colorb" type="button" id="addProduct" name="addProduct">Agregar Producto
					    <i class="material-icons right">plus_one</i>
					  </button>
			      </div>
			    </div>
			    
		</div>
		<div class="col s12 m2 l2"></div>
	</div>
	<div class="row">
		
		<div class="col s12 m12 l12">

			<table class="striped">
		        <thead>
		          <tr style="font-size: 12px;" class="color-video">
		              <th>Tipo de Software (XPRESS / PROFESSIONAL / PREMIUM / ENTERPRISE / MCC)</th>
		              <th>Versión Software </th>
		              <th>Codigo del País S.O.</th>
		              <th>Idioma de la instalacion del software</th>
		              <th># total de cámaras</th>
		              <th># total de canales de Audio</th>
		              <th># de Servidores de Video</th>
		              <th># de operadores Workstation</th>
		              <th># de clientes WEB</th>
		              <th>ISS General Modules</th>
		              <th># de canales para módulo seleccionado</th>
		              <th># Factura ISS asociadas</th>
		              <th>Comentarios adicionales</th>
		          </tr>
		        </thead>

		        <tbody id="cont-addProduct">
			                 
		        </tbody>
		      </table>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="container">
				<div class="section white">
				      <div class="row">
				        <h2 class="header">Seccion 3</h2>
				        <div class="divider"></div>
				        <p class="grey-text text-darken-3 lighten-3">Sólo se requiere para solicitar tipos de NUEVA LICENCIA: Por favor, especifique los siguientes parámetros por cada servidor y estación de trabajo (Ingrese "N / A" si no es aplicable o deje en blanco la entrada).<br><br>
				        <span style="font-size: 20px;" for="addServer">Agrega una fila (SOLO SI SE CUENTA CON VARIOS SERVIDORES):&nbsp;&nbsp;</span>  
				        <button class="btn waves-effect waves-light securos-colorb" type="button" id="addServer" name="addServer">Agregar Servidor
						    <i class="material-icons right">plus_one</i>
						  </button>
						  <!--<input type="button" onClick="go()" value="Ejecutar HRU">-->
				      </div>
				</div>
			</div>
			<table class="striped">

				<thead>
					<tr>
						<th style="border: none;"></th>
						<th style="border: none;"></th>
						<th style="border: none;"></th>
						<th colspan="4" class="color-video-title center"  >Video Analytics</th>
					</tr>
				</thead>
		        <thead>
		          <tr style="font-size: 12px;" class="color-video">
		              <th style="background-color: #b6cdea;">Tipo de PC  (Servidor de vídeo / Operador Worstation) <a href="#modal1" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a></th>
		              <th style="background-color: #b6cdea;">Codigo (Guardant / Hardware/ TVISS) <a href="#modal2" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a> </th>
		              <th style="background-color: #b6cdea;"># de Cámaras</th>
		              <th>Módulos analíticos ISS</th>
		              <th># de canales para el módulo seleccionado</th>
		              <th>OPCIÓN ADICIONAL 1: SecurOS AUTO - País / Estado</th>
		              <th>OPCIÓN ADICIONAL 2: SecurOS FACE <a href="#modal3" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a> - Tamaño DB rostros</th>
		              <th style="background-color: #b6cdea;">Additional Comments<br>*SecurOS FACE  module license information:<br>(FNUseHardwareKey), Codigo () (FNHardwareKey=), (Computername) <a href="#modal3" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a> <br>*SecurOS TRACKING KIT III  Direccón física MAC <a href="#modal4" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a></th>
		          </tr>
		        </thead>

		        <tbody id="cont-addServer">
			                 
		        </tbody>
		      </table>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="container">
				<div class="section white">
				      <div class="row">
				        <h2 class="header">Seccion 4</h2>
				        <div class="divider"></div>
				        <p class="grey-text text-darken-3 lighten-3">Sólo se requiere para solicitar tipos de UPGRADE, renovación, cambio de configuración: Por favor describa los principales cambios requeridos.<br>
				        	<p>En el espacio a continuación, describa en detalle los cambios que son necesarios hacer a su licencia (s) EXISTENTE y el porque.</p>
				      
					      <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">mode_edit</i>
					          <textarea id="descripcion-secc4" class="materialize-textarea" data-length="5000"></textarea>
					          <label for="descripcion-secc4">Descripción con lujo de detalle</label>
					        </div>
					  </div>
				      </div>
				</div>
			</div>
		</div>
		<center><button class="btn waves-effect waves-light securos-colorb" id="save-configuration" name="save" type="submit">Guardar y verificar solicitud
		</button>
        <div id="output"></div></center>
	</div>

			</form>

			<footer class="page-footer securos-colorb">
	          <div class="footer-copyright">
	            <div class="container">
	            © 2018 Intelligent Security Systems
	            <a class="grey-text text-lighten-4 right" href="http://isscctv.com/">Sitio ISS</a>
	            </div>
	          </div>
	        </footer>


<!--MODALS DE INFORMACION-->
	<div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>Tipo de PC  (Servidor de vídeo / Operador Worstation)</h4>
	      <p>Sólo hay 1 servidor de configuración en un sistema. Todos los demás servidores son servidores periféricos. Si el sistema tiene sólo 1 servidor, entonces es un servidor de configuración por defecto.</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">Entendido</a>
	    </div>
	</div>
	<div id="modal2" class="modal">
	    <div class="modal-content">
	      <h4>Codigo (Guardant / Hardware/ TVISS)</h4>
	      <p>Para obtener el código correcto ejecutar el hardware report utility. <br><br><b>Ejemplo de código Guardant USB:</b> 000000002A50454E<br> <b>Ejemplo de código TVISS:</b> 95692D6B356C46B4 <br><b>Ejemplo de código HW:</b> CF61F1F5AB5D131B23C138FEF0738893). <br><br>En el caso de utilizar el Guardant USB o junta TVISS, no se utiliza el código de HW.</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">Entendido</a>
	    </div>
	</div>
	<div id="modal3" class="modal">
	    <div class="modal-content">
	      <h4>SecurOS FACE</h4>
	      <p>El módulo SecurOS Face necesita una licencia adicional (face.key.iss). Por favor, para obtener el código correcto ejecutar el hardware report Utility.<br><br><b>Ejemplo:</b><br><br>  FNUseHardwareKey = HostId<br> FNHardwareKey = aa095d4c2e0f:9582d93<br> Computername = VIDEOSERVER</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">Entendido</a>
	    </div>
	</div>
	<div id="modal4" class="modal">
	    <div class="modal-content">
	      <h4>SecurOS TRACKING KIT III  Direccón física MAC</h4>
	      <p>El módulo SecurOS Tracking Kit III necesita una licencia adicional (iv_license). Por favor, agregar la dirección física MAC del server a licenciar. <br><br><b>Ejemplo:</b><br><br>Physical Address: 50-E7-E5-88-55-10													
</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">Entendido</a>
	    </div>
	</div>

<!--FIN MODALS-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="materialize/js/securos.js"></script>
	<script type="text/javascript">		
        var nProducts=0;
		var nServers=0;
        $('#addServer').click(function(){
              nServers++;
            $('#cont-addServer').append('<tr id="Server'+nServers+'"> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="Video Server - Configuracion">Video Server - Configuración</option> <option value="Video Server - Periferico">Video Server - Periferico</option> <option value="Estacion de Trabajo - Operador">Estación de Trabajo - Operador</option> </select> </td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="SecurOS AUTO - Low Speed">SecurOS AUTO - Low Speed</option> <option value="SecurOS AUTO - High Speed">SecurOS AUTO - High Speed</option> <option value="SecurOS CARGO - Side">SecurOS CARGO - Side</option> <option value="SecurOS CARGO - Top">SecurOS CARGO - Top</option> <option value="SecurOS TRANSIT">SecurOS TRANSIT</option> <option value="SecurOS TRAFFIC">SecurOS TRAFFIC</option> <option value="SecurOS FACE">SecurOS FACE</option> <option value="SecurOS TRACKING KIT III">SecurOS TRACKING KIT III</option> <option value="SecurOS POS">SecurOS POS</option> </select> </td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="10">Face DB: 10</option> <option value="50">Face DB: 50 </option> <option value="100">Face DB: 100</option> <option value="500">Face DB: 500</option> <option value="1,500">Face DB: 1,500</option> <option value="2,000">Face DB: 2,000</option> <option value="10,000">Face DB: 10,000</option> <option value="30,000">Face DB: 30,000</option> <option value="50,000">Face DB: 50,000</option> <option value="100,000">Face DB: 100,000</option> <option value="500,000">Face DB: 500,000</option> </select> </td> <td><input type="text" id=""></td> </tr>');
        });
		$('#addProduct').click(function(){
              nProducts++;
            $('#cont-addProduct').append('<tr id="Product'+nProducts+'"> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="Xpress">Xpress</option> <option value="Professional">Professional</option> <option value="Premium">Premium</option> <option value="Enterprise">Enterprise</option> <option value="MCC">MCC</option> </select> </td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="9.x">9.x</option> <option value="8.6">8.6</option> </select> </td> <td><input type="text" id=""></td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="English">English</option> <option value="Spanish">Spanish</option> <option value="Russian">Russian</option> <option value="Japanese">Japanese</option> <option value="Ukrainian">Ukrainian</option> <option value="Chinese">Chinese</option> <option value="Portuguese BR">Portuguese BR</option> </select> </td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="Archiver">Archiver</option> <option value="Active Camera Tracker">Active Camera Tracker</option> <option value="integration VideoWall">integration VideoWall</option> <option value="VideoWall Inteligente ISS">VideoWall Inteligente ISS</option> <option value="Servidor RTSP">Servidor RTSP</option> <option value="Modbus">Modbus</option> <option value="Intercom IP">Intercom IP</option> <option value="SNMP">SNMP</option> <option value="Light Integration">Light Integration</option> <option value="IIDK">IIDK</option> <option value="Access Control">Access Control</option> <option value="Alarm Panel">Alarm Panel</option> <option value="External DB Exporter">External DB Exporter</option> <option value="Reports Module">Reports Module</option> <option value="Failover Module">Failover Module</option> </select> </td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> </tr>');
        });
        function go() { 
			var w = new ActiveXObject("WScript.Shell"); 
			w.run("C:\\Program Files (x86)\\ISS\\SecurOS\\tools\\hardwarereportutility.exe");
        }
        
        function processInput()
        {
            var finalStr = {"products":[],"servers":[]};
            
            
            var doc = document.getElementById("cont-addProduct").children;
            var products = {"type":[],"version":[],"country":[],"cameras":[],"audio_channel":[],"servers":[],"workstations":[],"web_clients":[],"general_modules":[],"number_of_channels":[],"receipt_number":[],"comments":[]};
            
            for(var i=0;i<doc.length;i++)
            {
                products["type"].push(doc[i].children[0].children[0].value);
                products["version"].push(doc[i].children[1].children[0].value);
                products["country"].push(doc[i].children[2].children[0].value);
                products["cameras"].push(doc[i].children[3].children[0].value);
                products["audio_channel"].push(doc[i].children[4].children[0].value);
                products["servers"].push(doc[i].children[5].children[0].value);
                products["workstations"].push(doc[i].children[6].children[0].value);
                products["web_clients"].push(doc[i].children[7].children[0].value);
                products["general_modules"].push(doc[i].children[8].children[0].value);
                products["number_of_channels"].push(doc[i].children[9].children[0].value);
                products["receipt_number"].push(doc[i].children[10].children[0].value);
                products["comments"].push(doc[i].children[11].children[0].value);
            }
            finalStr["products"].push(products);
            
            var servers = document.getElementById("cont-addServer").children;
            products = {"type":[],"hru":[],"cameras":[],"module":[],"channels":[],"additional_auto":[],"additional_face":[],"comments":[]};
            
            for(var i=0;i<servers.length;i++)
            {
                products["type"].push(servers[i].children[0].children[0].value);
                products["hru"].push(servers[i].children[1].children[0].value);
                products["cameras"].push(servers[i].children[2].children[0].value);
                products["module"].push(servers[i].children[3].children[0].value);
                products["channels"].push(servers[i].children[4].children[0].value);
                products["additional_auto"].push(servers[i].children[5].children[0].value);
                products["additional_face"].push(servers[i].children[6].children[0].value);
                products["comments"].push(servers[i].children[7].children[0].value);
               
            }
            finalStr["servers"].push(products);
            
            //console.log(JSON.stringify(finalStr));
            
            
            $.ajax({
                  type: "POST",
                    url: "ajax/register_license.php",
                    data: "json="+JSON.stringify(finalStr)+"&req_type="+document.getElementById("select_type_request").value+"&lic_type="+document.getElementById("select_type_license").value+"&name="+document.getElementById("nombre").value+"&mail="+document.getElementById("email").value+"&company="+document.getElementById("empresa").value+"&mayorista="+document.getElementById("mayorista").value+"&final_user="+document.getElementById("userFinal")+"&comments="+document.getElementById("descripcion-secc4").value+"&project="+document.getElementById("project_name").value,
                     beforeSend: function(objeto){
                        alert("Registrando solicitud");
                      },
                    success: function(datos){
                        $("#output").html(datos);
                        alert("Solicitud enviada");
                        
                        //window.location.assign("../");
                    }
               }); 
            
        }
        
        $( "form" ).on( "submit", function( event ) {
            event.preventDefault();
            processInput();
        });
        
        /*
        // Autocomplete "Empresa" field
        $(function() {
            $( "#empresa" ).autocomplete({
              source:"./ajax/autocompleteEnterprise.php?type=2",
              minLength: 1,
            });
        });
        // Autocomplete "Mayorista" field
        $(function() {
            $( "#mayorista" ).autocomplete({
              source:"./ajax/autocompleteEnterprise.php?type=3",
              minLength: 1,
            });
        });
        // Autocomplete "Usuario final" field
        $(function() {
            $( "#userFinal" ).autocomplete({
              source:"./ajax/autocompleteUsuarioFinal.php",
              minLength: 1,
            });
        });
        
        */
	</script>

</body>
</html>