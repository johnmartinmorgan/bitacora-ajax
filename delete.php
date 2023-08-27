<?php
require 'pdo.php';
$id = strip_tags($_GET['id']);
$id = intval($id);
$delete = $pdo -> prepare("DELETE FROM bitacora WHERE id = :id");
$delete -> execute([
	'id' => $id
]);
header('Location: index.php')
?>