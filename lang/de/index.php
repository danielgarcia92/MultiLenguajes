<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="../../css/demand.css">
		<link rel="shortcut icon" type="image/x-icon" href="../../imagenes/demand.ico" >
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>

		<title>Demand Frontier | Marketing Digital y Agencia de Automatización de Marketing</title>

	</head>
	<body>

		<div class="pos-f-t">
			<div class="collapse" id="navbarToggleExternalContent">
			    <div class="bg-dark p-4"> 
			    	<center>
			    		<table>
				    		<tr>
				    			<th><h4 class="text-white"><center> Home </center></h4></th>
				    			<th><h4 class="text-white"><center> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </center></h4></th>
					    		<th><h4 class="text-white"><center> Visión </center></h4></th>
				    		</tr>
				    		<tr>
				    			<td><h4 class="text-white"><center> Compañeros </center></h4></td>
				    			<th><h4 class="text-white"><center> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </center></h4></th>
					    		<td><h4 class="text-white"><center> Contáctanos </center></h4></td>
				    		</tr>
					    	<tr>
				    			<td><h4 class="text-white"><center> Nuestra Historia </center></h4></td>
				    			<th><h4 class="text-white"><center> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </center></h4></th>
					    		<td><h4 class="text-white"><center> Nuestro Trabajo </center></h4></td>
				    		</tr>
				    	</table>
				    	<img src="../../imagenes/banner.png" alt="banner"/>
				    	<br><br>
				    	<img src="../../imagenes/redessociales.png" alt="redessociales">
			    	</center>
			    	
			    </div>
			</div>
			<nav class="navbar navbar-light bg-light">
				<!-- Logo -->
				<a class="navbar-brand" href="#">
			    	<img src="../../imagenes/demand_logo.png" width="130" class="d-inline-block align-top" alt="Demand Frontier Logo">
			    </a>
			    <!-- Menu -->
			    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> 
			    	Menu
			    	<span class="navbar-toggler-icon"></span>
			    </button>
			    <!-- Lenguajes -->
			    <div class="navbar-header">
			    	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">Lang
			    		<div id="navbar" class="navbar-collapse collapse navbar-right">
				            <ul class="nav navbar-nav">
				                <li class="dropdown">
				                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img id="imgNavDeu" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavSel">DEU</span> <span class="caret"></span></a>
				                    <ul class="dropdown-menu" role="menu">
				            	        <li><a id="navEsp" href="../../lang/es/index.php" class="language"> <img id="imgNavEsp" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavEsp">Español</span></a></li>
				                        <li><a id="navDeu" href="../../lang/de/index.php" class="language"> <img id="imgNavDeu" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavDeu">Deutsch</span></a></li>
				        			    <li><a id="navFra" href="#" class="language"><img id="imgNavFra" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavFra">Francais</span></a></li>
				        			    <li><a id="navEng" href="../../lang/en/index.php" class="language"><img id="imgNavEng" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavEng">English</span></a></li>
				        	        </ul>
				                </li>
				            </ul>
				        </div>
			    	</button>
		        </div>
		        
			</nav>
		</div>

		<center><h4>Webseite auf Deutsch <br> DEMAND FRONTIER <br> Alle Rechte vorbehalten</h4></center>

				<div>
			<script type="text/javascript">
				var images = new Array();
				
				for (var i = 1; i < 4; i++)
				    images.push("../../imagenes/imagen" + i + ".jpg");

				var x = 0;

				function changeImage() {
				    document.getElementById('ad').src = images[x];
				    if (x < 2)
				        x += 1;
				    else
				        x = 0;
				}
				setInterval(function () {
				    changeImage();
				}, 5000);
			</script>
		</div>

		<img width="100%" id='ad' src="../../imagenes/imagen3.jpg" />
		<br><br><br>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../../js/lang.js"></script>
	</body>
</html>
