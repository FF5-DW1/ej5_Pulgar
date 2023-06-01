<?php

// Conexion a la base de datos
require_once('bdd.php');

if (isset($_POST['title']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['company']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])) {

	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];

	$phone = str_replace([" ","-",".","_"],"",$phone);

	$sql = "SELECT * FROM events; INSERT INTO events(title, name, email, phone, company, start, end, color) values (:title, :name, :email, :phone, :company, :start, :end, :color)";

		echo $sql;

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

	// if (empty($_POST['title']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])) {
	// 	echo "Campo obligatorio";
	// } elseif (!is_int($_POST['phone'])){
	// 	echo "Formato no válido";
	// } else {
	// 	$sql = "SELECT * FROM events; INSERT INTO events(title, name, email, phone, company, start, end, color) values ('$title', '$name', '$email', '$phone', '$company', '$start', '$end', '$color')";

	// 	echo $sql;

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

header('Location: ' . $_SERVER['HTTP_REFERER']);
