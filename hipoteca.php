<?php 
$calculo=0;
$cantidad_prestamo="";

//FUNCIONES A UTILIZAR
function validar_numero($numero) {
	if (!is_numeric($numero) || $numero<0) {
		$numero = 0;
	} 
	return $numero;
}

function calculo_cuota($VA,$i,$n) {
	$I = $i / 12 / 100 ;
$I2 = $I + 1 ;
$I2 = pow($I2,-$n*12) ;

$CuotaMensual = ($I * $VA) / (1 - $I2);
$CuotaMensual=round($CuotaMensual,3);

return $CuotaMensual;

}

if (isset($_GET['calcular_cuota'])) {
	$accion = $_GET['calcular_cuota'];
	if ($accion == 'Calcular' || $accion =='Recalcular') {
		$cantidad_prestamo=$_GET['cantidad_prestamo_total'];
		 $cantidad_prestamo = validar_numero($cantidad_prestamo);
		
		$tasa_interes=$_GET['tasa_interes'];
		$tasa_interes=validar_numero($tasa_interes);
		
		$periodo_amortizacion=$_GET['periodo_amortizacion'];
		$periodo_amortizacion= validar_numero($periodo_amortizacion);
		
	} 
}

if ($cantidad_prestamo == 0 || $tasa_interes==0 || $periodo_amortizacion ==0 ) {
	$CuotaMensual ="";
} else {
	$CuotaMensual = calculo_cuota($cantidad_prestamo,$tasa_interes,$periodo_amortizacion);
}

	
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">

<title>Simulador de Hipotecas </title>



<link rel="stylesheet" href="/templates/html5.css" type="text/css"> 

<link rel="stylesheet" href="/templates/style.css?v=1.5.3" type="text/css">


<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300&subset=latin&display=swap" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,300&subset=latin&display=swap" rel="stylesheet" type="text/css">




<style>
.calculator-content {
  margin-right: 350px;
  background: white;
  /* border: 1px solid #eee; */
  margin-top: 20px;
}	
.calculator-content .calculator-label {
  line-height: 1em;
  padding: 20px 10px 10px 10px;
  border: 1px solid #eee;
  margin-bottom: -1px;
  margin-right: 25%;
}
.calculator-content .calculator-label input {
  float: right;
  background: #eee;
  border: 0;
  padding: 7px 10px;
  width: 20%;
  margin-top: -5px;
}
.calculator-content .calculator-label strong {
  font-size: 1.3em;
  color: rgb(0, 96, 156);
  padding-left: 5px;
}
.sbm-calculate {
  background: rgb(0, 96, 156) !important;
  color: white;
  box-sizing: content-box;
}
.logotipo {
	float: left;
	margin-bottom: 0%;
}
.idioma {
float: right;
}
.idioma p a {
	text-decoration: none;
	color: black;
}
.enlace {
	float: right;
}
.enlace p a {
	text-decoration: none;
	color: black;
}
.titulo {
	padding-top: 20%;
	padding-left: 10%;
	padding-right: 35%;
	margin-right: 60%;
}
.pull-right-leadform {
	margin-right: 20%;
	float: right;
	margin-top: -2%; 
}
fieldset {
	padding-right: 25%;
}
fieldset input {
	padding: 0% 35% 2% 0%;
	margin-top: 10%;
}
textarea {
	padding: 0% 35% 2% 0%;
	margin-top: 10%;
}

</style>
<div class="logotipo">
			<a href="hipoteca.php">
				<img src="imagenhipoteca.png" alt="aHipoteques" id="logo" data-height-percentage="52" />
			</a>
			
</div>
	<div class="idioma">
		<p><a href="" > CAT </a>&nbsp;&nbsp; <a href="" > ES </a>&nbsp;&nbsp;</p>
	</div>
	<br>
	<div class="enlace">
		<p><a href=""> HIPOTEQUES</a>&nbsp;&nbsp;<a href=""> REFINANCAMENT</a>&nbsp;&nbsp;<a href=""> PRESTEC</a>&nbsp;&nbsp;<a href=""> L'EQUIP</a>&nbsp;&nbsp;<a href=""> CONTACTE</a>&nbsp;&nbsp;
		</p> 
	</div>
<main id="main">
	<div class="container">
		<div class="title">
			<h1 id='fx-page-title'>Simulador de Hipotecas</h1>		
		</div>

        <div class="pull-right-leadform">
            			<h3 class="leadform-title">
				Contacta con nosotros			</h3>

				<form name="inquiry" method="get" action="hipoteca.php" class="fn-leadform" novalidate>
						<input type="hidden" name="page_id" value="14">
			<input type="hidden" name="email-confirm" value = "">
			<input type="hidden" name="category_id" value = "4">
							<input type="hidden" name="office_id" value = "1">
			
					<input type="hidden" name="sale_price" value="400000">
			<input type="hidden" name="year_term" value="30">
			<input type="hidden" name="annual_interest_percent" value="0.9">
					<input type="hidden" name="email_verify" value="">	
						<fieldset>
			<div id="form-message" style="color:tomato;">
			<div class="fields">
				<input type="text" id="name" name="first_name" placeholder="Nombre" data-validation="required" required />
			</div>
			<div class="fields">
				<input type="text" id="last_name" name="last_name" placeholder="Apellidos" data-validation="required" required />
			</div>
			<div class="fields">
				<input type="text" id="phone" name="phone" placeholder="Teléfono" data-validation="phone" required/>
			</div>
			<div class="fields">
				<input type="email" id="email" name="email" placeholder="Email" data-validation="email" required />
			</div>
			
		</div>
				
					<div class="fields">
				<textarea name="comments" placeholder="Comentarios"></textarea>
			</div>
					
						<div class="checkbox leadform__fieldContainer">
				<label class="checkbox__label" for="checkbox__legal">
					<input class="leadform__field" type="checkbox" id="checkbox__legal" name="checkbox__legal"  data-validation="gdpr required" required>
					<span class="checkbox__checkmark"></span>
					<span class="checkbox__text">Acepto las <a  class="popup legal" href="#inline1">condiciones de uso</a></span>
				</label>
			</div>
			<div id="inline1" style="display: none;">
				<p>De acuerdo con lo establecido por la Ley Org&aacute;nica 15/1999, le informamos que los datos obtenidos de este formulario ser&aacute;n incorporados a un fichero automatizado bajo la responsabilidad de AFINANCE FINANCIAL CONSULTING SL con la finalidad de atender sus consultas y remitirle informaci&oacute;n relacionada que pueda ser de su inter&eacute;s.</p>

<p>Puede ejercer sus derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n mediante un escrito a nuestra direcci&oacute;n PASSEIG DE GRACIA 85 PLANTA 8 08008, BARCELONA.</p>

<p>Mientras no nos comunique lo contrario, entenderemos que sus datos no han sido modificados, que usted se compromete a notificarnos cualquier variaci&oacute;n y que tenemos su consentimiento para utilizarlos para las finalidades mencionadas.</p>

<p>El env&iacute;o de estos datos implica la aceptaci&oacute;n de esta cl&aacute;usula.</p>
			</div>
			
			<div class="submit-div">
				<input id="submit" type="submit" class="button inquiry" value="Enviar">
			</div>
			<input type="hidden" name="formname" value="inquiry">
		</fieldset>
		<div class="fn-lf-errors"></div>
	</form>
								
		
<!-- Fancybox -->
<link rel="stylesheet" href="/scripts/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script src="/scripts/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script>
	$(document).ready(function() {
		$('a.popup').fancybox({
			'width': 600,
			'height': 'auto',
			'autoSize': false
		});
	});
</script>
<!-- End Fancybox -->        </div>
    	<form method="GET" name="information" action="hipoteca.php">
	    	
	    	<input type="hidden" name="form_complete" value="1">
	    	
			<div class="calculator-content">
				<div class="calculator-label">
					<label for="sale_price">Introduce el importe de tu préstamo hipotecario</label><input type="number" id="sale_price" name="cantidad_prestamo_total" value= "<?php echo $cantidad_prestamo; ?>">
				</div>
				<div class="calculator-label">			
					<label for="year_term">Plazos del préstamo hipotecario en años</label><input type="number" id="year_term" name="periodo_amortizacion" value= "<?php echo $periodo_amortizacion; ?>">
				</div>
				<div class="calculator-label">			
					<label for="annual_interest_percent">Tipo de interés anual</label><input type="number" step="any" id="annual_interest_percent" name="tasa_interes" value= "<?php echo $tasa_interes; ?>">
				</div>
									<div class="calculator-label">
			            Cuota <strong> <?php echo $CuotaMensual;  ?></strong> 
			            <input type="submit" class="sbm-calculate" name="calcular_cuota" value="Recalcular">
					</div>
								
			</div>
    	</form>
</div>
</main>
</body>
</html>