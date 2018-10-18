<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nahual</title>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/play.js"></script>
<script src="js/a_seccion.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
<?php include ("inc/menu.php");?>
<section class="portafolio">
<div class="container">
    <div class="row cuadro">
        <div class="col-xs-12">
        <h3 class="page-header">NAHUAL</h3>
            <form class="form-inline">
              <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" placeholder="Nombres">
              </div>
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
              </div>
              <div class="form-group">
                <label for="fecha">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="fecha" placeholder="Fecha Nacimiento">
              </div>
              <button type="button" class="btn btn-default">Siguiente</button>
              <button type="button" class="btn btn-default">Omitir</button>
            </form>
        </div>
        <div class="col-xs-12">
        	<div id="imagen-nahual" style="height:300px; margin-top:10px">
            
            </div>
        </div>
    </div>
</div>
</section>
<script>
	$(document).ready(function(){
		$("#fecha").change(function(){	
			var d = new Date($("#fecha").val());
			
			if(d.getYear()>69){
				var parametros = {
					"fecha" : $("#fecha").val()
				};
								
				$.ajax({
						data: parametros,
						type: "POST",
						url: "inc/ajax_nahual.php"
					})
				 .done(function( data, textStatus, jqXHR ) {
						console.log( "Resultado: " +  data);
						$( "#imagen-nahual" ).html('<img src="nahual/'+data+'.jpg" alt="Nahual">');
				 	})
				 .fail(function( jqXHR, textStatus, errorThrown ) {
						 if ( console && console.log ) {
							 console.log( "La solicitud a fallado: " +  textStatus);
						 }
					});
			}
		});
	});
</script>
</body>
</html>


