<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title> Ejercicio extra </title>
<style>

.logotipo {
	float: left;
}
body {
	background-color: lightgray;
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

}
.caixa1 {
   margin: -299px 4% 10% 0%;
    background-color: white;
    border-radius: 2px;
    padding: 0% 7%;
    text-align: center;
    color: #707070!important;
    letter-spacing: 0.5px;
    font-weight: 400;
    max-width: 360px;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.24);
    border-radius: 6px;
    float: right;
}
.caixa label {
	margin: 1% 1% 1% 1%;
}
.caixa1 p {
    color: #707070;
    font-size: 26px;
}
.euribor {
    color: #707070;
    font-size: 14px!important;
    font-weight: 700;
}
.euribor {
    display: flex;
    flex-direction: row;
    align-items: center;
}
.caixa1 h5 {
    font-size: 40px;
    font-family: 'Merriweather',serif;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Muli',Helvetica,Arial,Lucida,sans-serif;
}
h1, h2, h3, h4, h5, h6, .et_quote_content blockquote p, .et_pb_slide_description .et_pb_slide_title {
    font-weight: bold;
    font-style: normal;
    text-transform: none;
    text-decoration: none;
    letter-spacing: 2px;
    line-height: 1.1em;
}
h1, h2, h3, h4, h5, h6 {
    color: #43688f;
}
h1, h2, h3, h4, h5, h6 {
    padding-bottom: 1px;
    color: #333;
    font-weight: 500;
    line-height: 1em;
}
.percentatge {
	margin: 1% 1% 1% 1%;
	font-size: 48px;
}
.campo {
	padding: 1% 8% 8% 20%; 
	margin: 1% 7% 1% 1%;
}
form input {
	font-size: 16px;
}
</style>
</head>
<body>
	<header>

		<div class="logotipo">
			<a href="https://ahipoteques.cat/">
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
	</header>
		<div class="titulo">
			<h1>Trobem la teva 
			<br>
			 millor hipoteca</h1> 
			<h3>El nostre objectiu: La teva máxima satisfacció</h3>	
		</div>
	
<div style class="caixa1">
	 <p>La teva hipoteca<br />
		<b><strong>en un sol click</strong></b>
	</p> 
 	<p class="euribor">A partir de EURIBOR +</p> 

	 <span class="percentatge">0.60%</span>

 <form action="hipoteca.php" id="lidd_mc_form" class="lidd_mc_form" method="get">
 	<div class="lidd_mc_input concepte lidd_mc_input_light lidd_mc_input_responsive">

 		<h3><label for="lidd_mc_total_amount">Quantitat (€)</label></h3>
 		<input type="text" name="cantidad_prestamo_total"  class="campo" placeholder="€" value="300000.00" />
 		<br>
 		<span id="lidd_mc_total_amount-error"></span>
 	</div>

 		<input type="hidden" name="pago_adelantado" id="lidd_mc_down_payment" value="0" />
 	<div class="lidd_mc_input concepte lidd_mc_input_light lidd_mc_input_responsive">
 		<h3> <label for="lidd_mc_interest_rate">Interès (%)</label> </h3>
 		<input type="text" name="tasa_interes" id="lidd_mc_interest_rate" class="campo" placeholder="%" value="5.00" />
 		<br>
 		<span id="lidd_mc_interest_rate-error"></span>
 	</div>

 	<div class="lidd_mc_input concepte lidd_mc_input_light lidd_mc_input_responsive">
 		<h3><label for="lidd_mc_amortization_period">Anys</label> </h3>
 		<input type="text" name="periodo_amortizacion" id="lidd_mc_amortization_period" class="campo" placeholder="years" value="30" />
 		<br>
 		<span id="lidd_mc_amortization_period-error"></span>
 	</div>
		<br>
 	<input type="hidden" name="periodo_pago" id="lidd_mc_payment_period" value="12" /><div class="lidd_mc_input">
 		<input type="submit" name="calcular_cuota" id="lidd_mc_submit" class="campo" value="Calcular"/></div>
 		<br><br>
 </form>
</div>
	<footer>
	</footer>
</body>
</html>