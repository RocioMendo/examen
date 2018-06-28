<?php
	//INSERT INTO usuario (id_usuario, nombre_usuario, foto) VALUES ('1', 'Macotela', 'macotela_pack.jpg');
	//Controlador de transferencia de archivos
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "examen_2";

	$conexion = mysqli_connect($servername,$username,$password,$database);
	//preguntar si se presiono el boton submit
	if(isset($_POST["submit"])){
		//Identificar el archivo local
		$id_empleado=$_POST['id_empleado'];
		$nombre_empleado=$_POST['nombre_empleado'];
		$salario_empleado=$_POST['salario_empleado'];
		$url_foto_empleado=$_POST['url_foto_empleado'];
		//Parte 2.
		//Variabñe que extraiga la extensión del archivo
//		$imageFileType = pathinfo($url_foto_empleado, PATHINFO_EXTENSION);

		//Variable que valida que el archivo sea de tipo imagen
	//	$check =getimagesize($url_foto_empleado);
	//	if ($imageFileType=="png" || $imageFileType=="PNG") {


			$query = "INSERT INTO empleados (id_empleado,nombre_empleado, salario_empleado,url_foto_empleado) values
			 ('$id_empleado','$nombre_empleado', '$salario_empleado','$url_foto_empleado')";
			echo "Query a jecutar:".$query."</br>";
			//ejecutando query de insercion
			if ($query_a_ejecutar = mysqli_query($conexion, $query)) {
				echo "Query ejecutando correctamente </br>";
				header("Refresh:5; url= archivo.html");
			}else {
				echo "Query no ejecutando </br>";
			}
?>
