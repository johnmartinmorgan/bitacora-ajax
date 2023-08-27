<?php date_default_timezone_set("America/Argentina/Buenos_Aires");
require 'pdo.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = strip_tags($_POST['titulo']);
	$texto = strip_tags($_POST['texto']);
	$fecha = date("j-m-Y / H:i");
	$stmt = $pdo -> prepare("	INSERT INTO bitacora (titulo, texto, fecha) 
								VALUES (:titulo, :texto, :fecha)");
	$stmt -> execute([
		'titulo' => $titulo,
		'texto' => $texto,
		'fecha' => $fecha
	]);
	header('Location: index.php');
}
?>