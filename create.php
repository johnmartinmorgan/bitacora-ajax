<?php date_default_timezone_set("America/Argentina/Buenos_Aires");
require 'pdo.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
	$fecha = date("j-m-Y / H:i");
}
?>