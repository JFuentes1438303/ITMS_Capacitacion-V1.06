<?php  

	$documento = htmlentities(addslashes($_POST["documento"]));
	$password = htmlentities(addslashes($_POST["password"]));
	$cont = 0;
	$conexion = new PDO("mysql:host=localhost; dbname=itms_capacitacion", "root", "");

	$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT * FROM usuarios WHERE documento = :documento";

	$resultado = $conexion -> prepare($sql);

	$resultado -> execute(array(":documento" => $documento));

	while ($registro = $resultado -> fetch(PDO::FETCH_ASSOC)) {
		
		if (password_verify($password, $registro["password"])) {
			
			$cont = $cont + 1;
			$validar = true;
		}
	}


	if ($validar == true) {

		header("Location: ../views/home");
		$_SESSION["documento"] = $documento;
		$_SESSION["usuario"] = "1";
		// echo "REGISTRADO!!!!";
	}else{

		// include("../views/alerts/alerta_d_login.html");
		echo "NO REGISTRADO!!!";
	}

	$resultado -> closeCursor();
	
?>