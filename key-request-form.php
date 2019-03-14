<html>
<head>
	<title>Request Form | ISS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="materialize/css/securos.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="materialize/css/issTy.css">
    <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.css">
    <script src="jqueryui/jquery.js"></script>
    <script src="jqueryui/jquery-ui.js"></script>
    <script>    	
    	var enterprises;
    	var result = [];
        $( function() {
            $.ajax({
              type: "POST",
                url: "ajax/getEnterprises.php",
                data: "",
                 beforeSend: function(objeto){
                  },
                success: function(datos){                    
                    enterprises = eval(datos);
                    for(var i in enterprises){
    					result.push(enterprises[i]);
                    }                   
                }
           }); 
            $( "#mayorista" ).autocomplete({
				      source: result
			});
			$( "#empresa" ).autocomplete({
				      source: result
			});
        });
  </script>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	
	<nav class="securos-colorb z-depth-3">
	    <div class="nav-wrapper">
	      <img src="img/iss_logo_en_horizontal_blue.png" style="border-radius: 10px;" class="brand-logo responsive-img" height="100px" width="200px" />
	      <span href="#!" class="hide-on-small-only brand-logo center iss">License Request Form</span>	      
	    </div>
	</nav><br>
	<div class="row">
		<div class="col s12 m2 l2"></div>
		<div class="col s12 m8 l8">
			<div class="section white">
		      <div class="row">
		        <h2 class="header">Section 1</h2>
		        <div class="divider"></div>
		        <p class="grey-text text-darken-3 lighten-3">Please, fill full form to prevent delays.</p>
		      </div>
		    </div>		    
			<form method="POST" autocomplete="on">
				<div class="row" name="basic_data">
					<div class="row">
						<div class="input-field col s12 m6 l6">
				          <input id="nombre" name="nombre" type="text" class="validate">
				          <label for="nombre">Requester name</label>
				        </div>
				        <div class="input-field col s12 m6 l6">
				          <input id="email" name="email" type="email" class="validate">
				          <label for="email">Mail</label>
				        </div>
					</div>
					<div class="row">
				        <div class="input-field col s12 m6 l6 ui-widget">
				          <input id="empresa" name="empresa" type="text" class="validate">
				          <label for="empresa">Enterprise</label>
				        </div>
				        <div class="input-field col s12 m6 l6 ui-widget">
				          <input id="mayorista" name="mayorista" type="text" class="validate">
				          <label for="mayorista">Wholesaler</label>
				        </div>
				    </div>
					<div class="row">
                        <div class="input-field col s12 m6 l6 ui-widget">
				          <input id="userFinal" name="user_final" type="text" class="validate">
				          <label for="userFinal">End user</label>
				        </div>
				        <div class="input-field col s12 m6 l6 ui-widget">
				          <input id="project_name" name="project_name" type="text" class="validate">
				          <label for="project_name">Project name</label>
				        </div>
				    </div>
				    <div class="row">
				        <div class="col s12 m6 l6">
				        	<label>Request type</label>
							  <select class="browser-default" name="tipo_solicitud" id="select_type_request">
							    <option value="" disabled selected>Select desired option</option>
							    <option value="1">NEW LICENSE</option>
							    <option value="2">UPGRADE</option>
							    <option value="3">RENOVATION</option>
							    <option value="4">CHANGE CONFIGURATION</option>
							  </select>
				        </div>
				         <div class="col s12 m6 l6">
				        	<label>LICENSE TYPE</label>
							  <select class="browser-default" name="tipo_licencia" id="select_type_license">
							    <option value="" disabled selected>Select license type</option>
							    <option value="1">PERMANENT</option>
							    <option value="2">DEMO KIT</option>
							    <option value="3">TEMPORAL</option>
							  </select>
				        </div>
			        </div>
				</div>
				<div class="section white">
			      <div class="row">
			        <h2 class="header">NOTES</h2>
			        <div class="divider"></div>
			        <p class="grey-text text-darken-3 lighten-3">
			        	<ol>
                            <li>This form is valid for all license keys (ISS key.iss, face.key.iss and iv_license).
                            </li>
                            <li>ALL permanent key requests should be send within ISS RECEIPT (S). If this form does not match the corresponding RECEIPT, there will be a delay delivering the key
                            </li>
                            <li>All DEMO KIT requests should be sent within corresponding ISS RECEIPT (S).
                            </li>
                            <li>All DEMO KIT bought, own 180 days of open license rennovation.</li>
                            <li>All upgrde, renovation, or change configuration requests should include actual license Key.
                            </li>
                            <li>Key will be delivered in the next 24 to 48 hours after sending this request form.
                            </li>
			        	</ol>
			        </p>
			      </div>
			    </div>
			    <div class="divider"></div>
				<div class="section white">
			      <div class="row">
			        <h2 class="header">Section 2</h2>
			        <div class="divider"></div>
			        <p class="grey-text text-darken-3 lighten-3">Only NEW LICENSE requirethis field. Please, specify following global license parameters.<br><br>
			        <span style="font-size: 20px;" for="addServer">Add row (ONLY IF YOU NEED MORE THAN ONE TYOE OF SOFTWARE):&nbsp;&nbsp;</span>  
			        <button class="btn waves-effect waves-light securos-colorb" type="button" id="addProduct" name="addProduct">Add product
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
		          	  <th>Product ID</th>
		              <th>Software type (XPRESS / PROFESSIONAL / PREMIUM / ENTERPRISE / MCC)</th>
		              <th>Software version </th>
		              <th>Country code S.O.</th>
		              <th>Software language</th>
		              <th># quantity of cameras</th>
		              <th># quantity of audio channels</th>
		              <th># quantity of Video Servers</th>
		              <th># quantity of operator Workstations</th>
		              <th># ISS RECEIPT number</th>
		              <th>Additional comments</th>
		          </tr>
		        </thead>

		        <tbody id="cont-addProduct">
			                 
		        </tbody>
		      </table>
		</div>
	</div>
	<div class="container">
			<div class="divider"></div>
						<div class="section white">
					      <div class="row">
					        <h2 class="header">Section 3</h2>
					        <div class="divider"></div>
					        <p class="grey-text text-darken-3 lighten-3">If you want to add more than one module to a product, do it by using the same <b>PRODUCT ID</b>, which will be associated to the quantity of channels you need.<br><br>
					        <span style="font-size: 20px;" for="addServer">Add row (ONLY IF YOU NEED MORE THAN ONE MODULE TYPE):&nbsp;&nbsp;</span>  
					        <button class="btn waves-effect waves-light securos-colorb" type="button" id="addModule" name="addModule">Add module
							    <i class="material-icons right">plus_one</i>
							  </button>
					      </div>
					    </div>
	</div>
	<!--ISS MODULES-->
	<div class="row">		
		<div class="col s12 m12 l12">
			<table class="striped">
		        <thead>
		          <tr style="font-size: 12px;" class="color-video">
		              <th>Product ID</th>		              
		              <th># number of web clients</th>
		              <th>ISS General Modules</th>
		              <th># number of channels for selected module</th>
		          </tr>
		        </thead>

		        <tbody id="cont-addModule">
			                 
		        </tbody>
		      </table>
		</div>
	</div>
	<!--END ISS MODULES-->
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="container">
				<div class="section white">
				      <div class="row">
				        <h2 class="header">Seccion 4</h2>
				        <div class="divider"></div>
				        <p class="grey-text text-darken-3 lighten-3">Required only for NEW LICENSE request type: Please, specify next parameters for each server and workstation (Type "D / A" if it does not apply, or leave in blank).<br><br>
				        <span style="font-size: 20px;" for="addServer">Add row (ONLY IF YOU HAVE MORE SERVERS):&nbsp;&nbsp;</span>  
				        <button class="btn waves-effect waves-light securos-colorb" type="button" id="addServer" name="addServer">Add Server
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
		              <th style="background-color: #b6cdea;">Computer Type  (Video Server / Operator Worstation) <a href="#modal1" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a></th>
		              <th style="background-color: #b6cdea;">HRU (Guardant / Hardware/ TVISS) <a href="#modal2" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a> </th>
		              <th style="background-color: #b6cdea;"># cameras</th>
		              <th>ISS Analytics</th>
		              <th># number of channels for selectec module</th>
		              <th>ADDITIONAL OPTION 1: SecurOS AUTO - Country / State</th>
		              <th>ADDITIONAL OPTION 2: SecurOS FACE <a href="#modal3" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a> - face DB size</th>
		              <th style="background-color: #b6cdea;">Additional Comments<br>*SecurOS FACE  module license information:<br>(FNUseHardwareKey), Codigo () (FNHardwareKey=), (Computername) <a href="#modal3" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a> <br>*SecurOS TRACKING KIT III MAC Address of the computer<a href="#modal4" class="red-text modal-trigger tooltipped" data-position="bottom" data-tooltip="MAS INFORMACIÓN">+INFO</a></th>
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
				        <h2 class="header">Seccion 5</h2>
				        <div class="divider"></div>
				        <p class="grey-text text-darken-3 lighten-3">Required only for UPGRADE, RENOVATION, CHANGE CONFIGURATION request type: Please describe main changes required.<br>
				        	<p>In following field, specify detailed changes necessary for your existent license and explain why you are requesting this change.</p>
				      
					      <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">mode_edit</i>
					          <textarea id="descripcion-secc4" class="materialize-textarea" data-length="5000"></textarea>
					          <label for="descripcion-secc4">Detailed request descripction and explanation</label>
					        </div>
					  </div>
				      </div>
				</div>
			</div>
		</div>
		<center><button class="btn waves-effect waves-light securos-colorb" id="save-configuration" name="save" type="submit">Save and verify request
		</button>
        <div id="output"></div></center>
	</div>

			</form>

			<footer class="page-footer securos-colorb">
	          <div class="footer-copyright">
	            <div class="container">
	            © 2019 Intelligent Security Systems
	            <a class="grey-text text-lighten-4 right" href="http://isscctv.com/">ISSIVS Site</a>
	            </div>
	          </div>
	        </footer>


<!--MODALS DE INFORMACION-->
	<div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>Computer Type  (Video Server / Operator Worstation)</h4>
	      <p>The whole system only have 1 configuration server. All the other servers are peripheral servers. If the system has only 1 server, that one server is the default configuration server.</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">Ok</a>
	    </div>
	</div>
	<div id="modal2" class="modal">
	    <div class="modal-content">
	      <h4>HRU (Guardant / Hardware/ TVISS)</h4>
	      <p>To obtain HRU, run program hardware report utility. <br><br><b>Guardant USB HRU example:</b> 000000002A50454E<br> <b>TVISS HRU example:</b> 95692D6B356C46B4 <br><b>HW HRU example:</b> CF61F1F5AB5D131B23C138FEF0738893). <br><br>In case you use Guardant or TVISS, you do not need HW HRU.</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">Ok</a>
	    </div>
	</div>
	<div id="modal3" class="modal">
	    <div class="modal-content">
	      <h4>SecurOS FACE</h4>
	      <p>SecurOS Face Module needs an additional license file (face.key.iss). Please, to obtain this license file, run hardware report Utility.<br><br><b>Example:</b><br><br>  FNUseHardwareKey = HostId<br> FNHardwareKey = aa095d4c2e0f:9582d93<br> Computername = VIDEOSERVER and please add physical MAC address of the server</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">Ok</a>
	    </div>
	</div>
	<div id="modal4" class="modal">
	    <div class="modal-content">
	      <h4>SecurOS TRACKING KIT III  MAC Physical Address</h4>
	      <p>SecurOS Tracking Kit III Module needs an additional license file (iv_license). Please add physical MAC address of the server. <br><br><b>Example:</b><br><br>Physical Address: 50-E7-E5-88-55-10													
</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">Ok</a>
	    </div>
	</div>

<!--FIN MODALS-->
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="materialize/js/securos.js"></script>
	<script type="text/javascript">		
        var nProducts=0;
		var nServers=0;
		var nModule=0;
        $('#addServer').click(function(){
              nServers++;
            $('#cont-addServer').append('<tr id="Server'+nServers+'"> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="Video Server - Configuration">Video Server - Configuration</option> <option value="Video Server - Peripheral">Video Server - Peripheral</option> <option value="Workstation - Operator">Workstation - Operator</option> </select> </td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="SecurOS AUTO - Low Speed">SecurOS AUTO - Low Speed</option> <option value="SecurOS AUTO - High Speed">SecurOS AUTO - High Speed</option> <option value="SecurOS CARGO - Side">SecurOS CARGO - Side</option> <option value="SecurOS CARGO - Top">SecurOS CARGO - Top</option> <option value="SecurOS TRANSIT">SecurOS TRANSIT</option> <option value="SecurOS TRAFFIC">SecurOS TRAFFIC</option> <option value="SecurOS FACE">SecurOS FACE</option> <option value="SecurOS TRACKING KIT III">SecurOS TRACKING KIT III</option> <option value="SecurOS POS">SecurOS POS</option> </select> </td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="10">Face DB: 10</option> <option value="50">Face DB: 50 </option> <option value="100">Face DB: 100</option> <option value="500">Face DB: 500</option> <option value="1,500">Face DB: 1,500</option> <option value="2,000">Face DB: 2,000</option> <option value="10,000">Face DB: 10,000</option> <option value="30,000">Face DB: 30,000</option> <option value="50,000">Face DB: 50,000</option> <option value="100,000">Face DB: 100,000</option> <option value="500,000">Face DB: 500,000</option> </select> </td> <td><input type="text" id=""></td> </tr>');
        });
		$('#addProduct').click(function(){
              nProducts++;
            $('#cont-addProduct').append('<tr id="Product'+nProducts+'"><td class="center"><b>'+nProducts+'</b></td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="Xpress">Xpress</option> <option value="Professional">Professional</option> <option value="Premium">Premium</option> <option value="Enterprise">Enterprise</option> <option value="MCC">MCC</option> </select> </td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="9.x">9.x</option> <option value="8.6">8.6</option> </select> </td> <td><input type="text" id=""></td> <td> <select class="browser-default"> <option value="#" selected>---</option> <option value="English">English</option> <option value="Spanish">Spanish</option> <option value="Russian">Russian</option> <option value="Japanese">Japanese</option> <option value="Ukrainian">Ukrainian</option> <option value="Chinese">Chinese</option> <option value="Portuguese BR">Portuguese BR</option> </select> </td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td><input type="text" id=""></td> <td><input type="text" id=""></td><td><input type="text" id=""></td><td><input type="text" id=""></td></tr>');
        });
        $('#addModule').click(function(){
              nModule++;
            $('#cont-addModule').append('<tr id="Module'+nModule+'"><td><input type="text" id=""></td> <td><input type="text" id=""></td> <td><select class="browser-default"> <option value="#" selected>---</option> <option value="Archiver">Archiver</option> <option value="Active Camera Tracker">Active Camera Tracker</option> <option value="integration VideoWall">integration VideoWall</option> <option value="VideoWall Inteligente ISS">VideoWall Inteligente ISS</option> <option value="Servidor RTSP">Servidor RTSP</option> <option value="Modbus">Modbus</option> <option value="Intercom IP">Intercom IP</option> <option value="SNMP">SNMP</option> <option value="Light Integration">Light Integration</option> <option value="IIDK">IIDK</option> <option value="Access Control">Access Control</option> <option value="Alarm Panel">Alarm Panel</option> <option value="External DB Exporter">External DB Exporter</option> <option value="Reports Module">Reports Module</option> <option value="Failover Module">Failover Module</option> </select> </td> <td><input type="text" id=""></td></tr>');
        });
        function go() { 
			var w = new ActiveXObject("WScript.Shell"); 
			w.run("C:\\Program Files (x86)\\ISS\\SecurOS\\tools\\hardwarereportutility.exe");
        }
        
        function processInput()
        {
            var finalStr = {"products":[],"modules":[], "servers":[]};
            
            
            var doc = document.getElementById("cont-addProduct").children;
            var products = {"productID":[],"type":[],"version":[],"country":[],"language":[],"cameras":[],"audio_channel":[],"servers":[],"workstations":[],"receipt_number":[],"comments":[]};
            
            for(var i=0;i<doc.length;i++)
            {
                products["productID"].push(doc[i].children[0].children[0].innerHTML);
                products["type"].push(doc[i].children[1].children[0].value);
                products["version"].push(doc[i].children[2].children[0].value);
                products["country"].push(doc[i].children[3].children[0].value);
                products["language"].push(doc[i].children[4].children[0].value);
                products["cameras"].push(doc[i].children[5].children[0].value);
                products["audio_channel"].push(doc[i].children[6].children[0].value);
                products["servers"].push(doc[i].children[7].children[0].value);
                products["workstations"].push(doc[i].children[8].children[0].value);
                products["receipt_number"].push(doc[i].children[9].children[0].value);
                products["comments"].push(doc[i].children[10].children[0].value);
            }
            finalStr["products"].push(products);
            
            
            
            var modulesdoc = document.getElementById("cont-addModule").children;
            var modules = {"productID":[],"webclients":[],"generalModules":[],"channels":[]};
            
            for(var i=0;i<modulesdoc.length;i++)
            {
                modules["productID"].push(modulesdoc[i].children[0].children[0].value);
                modules["webclients"].push(modulesdoc[i].children[1].children[0].value);
                modules["generalModules"].push(modulesdoc[i].children[2].children[0].value);
                modules["channels"].push(modulesdoc[i].children[3].children[0].value);
               
            }
            finalStr["modules"].push(modules);
            
            
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
            
            var dataToSend = "json="+JSON.stringify(finalStr)+"&req_type="+document.getElementById("select_type_request").value+"&lic_type="+document.getElementById("select_type_license").value+"&name="+document.getElementById("nombre").value+"&mail="+document.getElementById("email").value+"&company="+document.getElementById("empresa").value+"&mayorista="+document.getElementById("mayorista").value+"&final_user="+document.getElementById("userFinal").value+"&comments=#"+document.getElementById("descripcion-secc4").value+"&project="+document.getElementById("project_name").value;
            dataToSend.replace('=&',"=#&");
            dataToSend.replace(' ',"%20");
            $.ajax({
                  type: "POST",
                    url: "ajax/register_license.php",
                    data: dataToSend,
                     beforeSend: function(objeto){
                        //alert(dataToSend);
                        alert("Registrando solicitud");
                      },
                    success: function(datos){
                        //alert(datos);
                        //$("#output").html(datos);
                        alert("Solicitud enviada");
                        window.location.reload();
                    }
               }); 
            
        }
        
        $( "form" ).on( "submit", function( event ) {
            event.preventDefault();
            processInput();
        });
        
       
	</script>

</body>
</html>