<?php 
        class automovil {
            //Atributos
            private $matricula;
            private $marca;
            private $modelo;
            private $combustible;
                    //Constructor
                    function __construct($_matricula, $_marca, $_modelo, $_combustible) {
                        echo 'OBJETO CUENTA INSTANCIADO <br/>';
                        //Accediendo a los atributos
                        $this-> cumple = $atributo;
                        $this-> edad = $atributo2;   
                    }

            function mostrar() {
                $tabla="";
                $tabla+="<tr><td>Matricula</td><td>Marca</td><td>Modelo</td><td>Combustible</td></tr>";
                $tabla+="<tr><td>".$_matricula."</td><td>".$_marca."</td><td>".$_modelo."</td><td>".$_combustible."</td></tr>";
                echo $tabla;
            }

                    //Destructor
                    function __destruct() {
                        echo 'OBJETO CUENTA ELIMINADO';
                    }

        

            

               
        }

//Instanciacion
$obj = new automovil('4356', 'seat', 'toledo', '24.5');

 //Añade los metodos necesarios para obtener la edad e incrementarla en la unidad cunado cumpla años 
$obj ->mostrar()
   



    
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title> Ficheros </title>
</head>
<style type="text/css">
	body {
		background-color: lightblue;
	}
</style>

<body>
	<header>
	</header>
	<body>

	</body>
	<footer>
	</footer>
</body>
</html>