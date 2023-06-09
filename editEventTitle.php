<?php
// Conexion a la base de datos
require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id'])) {


	$id = $_POST['id'];

	$sql = "DELETE FROM events WHERE id = $id";
	$query = $conexion->prepare($sql);
	if ($query == false) {
		print_r($conexion->errorInfo());
		die('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
		print_r($query->errorInfo());
		die('Erreur execute');
	}
 } elseif (isset($_POST['title']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['company']) && isset($_POST['color']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['id'])) {

	$id = $_POST['id'];
	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];

	$phone = str_replace([" ","-",".","_"],"",$phone);

	$sql = "UPDATE events SET  title = :title, name = :name, email = :email, phone = :phone, company = :company, color = :color, start = :start, end = :end  WHERE id = $id ";
		
		$query = $conexion->prepare($sql);
		if ($query == false) {
			print_r($conexion->errorInfo());
			die('Erreur prepare');
		}

		$query->bindParam(':title',$title);
		$query->bindParam(':name',$name);
		$query->bindParam(':email',$email);
		$query->bindParam(':phone',$phone);
		$query->bindParam(':company',$company);
		$query->bindParam(':start',$start);
		$query->bindParam(':end',$end);
		$query->bindParam(':color',$color);

		$sth = $query->execute();
		if ($sth == false) {
			print_r($query->errorInfo());
			die('Erreur execute');
		}

	// if (!is_int($_POST['phone'])){
	// 	echo "Formato no válido";
	// } elseif (empty($_POST['title']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['start'])) {
	// 	echo "Campo obligatorio";
	// } else {
	// 	$sql = "UPDATE events SET  title = '$title', name = '$name', email = '$email', phone = '$phone', company = '$company', color = '$color', start = '$start', end = '$end'  WHERE id = $id ";
		
	// 	$query = $conexion->prepare($sql);
	// 	if ($query == false) {
	// 		print_r($conexion->errorInfo());
	// 		die('Erreur prepare');
	// 	}
	// 	$sth = $query->execute();
	// 	if ($sth == false) {
	// 		print_r($query->errorInfo());
	// 		die('Erreur execute');
	// 	}
	// }
} 

header('Location: index.php');
