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
 } elseif (isset($_POST['title']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['company']) && isset($_POST['color']) && isset($_POST['id'])) {

	$id = $_POST['id'];
	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$color = $_POST['color'];

	$sql = "UPDATE events SET  title = '$title', name = '$name', email = '$email', phone = '$phone', company = '$company', color = '$color' WHERE id = $id ";


	$query = $conexion->prepare($sql);
	if ($query == false) {
		print_r($conexion->errorInfo());
		die('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die('Erreur execute');
	}
}
header('Location: index.php');
