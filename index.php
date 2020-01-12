<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Mi primera pagina php</title>
    </head>
    <body>
		<h1>Hola mundo</h1>
		
		<form name="form1" method="post" action="index.php">
			numero 1: <input type="text" name="txtnumero1"><br>
			numero 2: <input type="text" name="txtnumero2"><br>
			numero 3: <input type="text" name="txtnumero3"><br>
			<input type="submit" name="calcular" values="calcular"><br>
		</form>

		<?php

		if(isset($_REQUEST["calcular"])){



        $num1 = $_REQUEST["txtnumero1"];
		$num2 = $_REQUEST["txtnumero2"];
		$num3 = $_REQUEST["txtnumero3"];

		if($num1 == 0 || $num2 == 0 || $num3==0){
			echo "deves ingresar todos los numeros";
			exit;

		}

        $suma = $num1 + $num2;
        $residuo = $num1 % $num2;
		echo "<br>";
		echo "la suma de " . $num1 . " y " . $num2 . " es " . $suma; echo "<br>";
		echo "El residuo de  " . $num1 . " y " . $num2 . " es " . $residuo;echo "<br>";
		if($num1>$num2 && $num1>0){
			echo "la condicion es verdadera";
		}elseif($num1>$num2 && $num1>$residuo){
			echo "la condicion esta bien";
		}else{
			echo "la condicion es falsa";
		}
echo "<br>";
		if(($num3 % 2) == 0){
			echo "el numero ". $num3 . "es par";
		}else{
			echo "el numero ". $num3 . "es impar";
		}
$colorSemaforo = "VERDE";
		switch(strtolower(trim($colorSemaforo))){
			case "verde":
			echo "avanzar";
			break;

				case "amarillo":
				echo "por favor detenerse";
				break;

					case "rojo":
					echo "no avance";
					break;

					default:
					echo "valor incorrecto";
					break;
		}

		$i=1;
		while($i <= 5){
			echo $i . "<br>";
			$i++;
		}

		echo "<br>";

		$i = 1;
		do{
			echo $i . "<br>";
			$i++;
		}while($i <= 5);

		echo "<br>";
		echo "Tabla de multiplicar de el 5";
		echo "<br>";

		$i = 1;
		while($i<=10){
			$mul = 5 * $i;
			echo $mul . "<br>";
			$i++;
		}

		echo "<br>";
		echo "Tabla de multiplicar de el 5 con do while";
		echo "<br>";
		$i=1;
		do{
			$mul = 5 * $i;
			echo $mul . "<br>";
			$i++;
			

		}while($i<=10);

		echo "<br>";
		$mul=5;
		$array=array(1,2,3,4,5,6,7,8,9,10);

		$longitud = count($array);
		for($i=0;$i<$longitud;$i++){
			echo $mul . "x" . $i . "=" . ($mul.$i) . "<br>";
		}

		foreach($array as $valor){
			echo $mul . "el valor es " . $valor . "=" . ($mul*$valor) . "<br>";
		}


	}
        
        ?>
    </body>
</html>