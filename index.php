<?php date_default_timezone_set("America/Argentina/Buenos_Aires");
require 'pdo.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Bitácora AJAX</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Bitácora AJAX</h1>
			<div class="col-sm-12 col-md-6">
				<div class="list-group">
					<?php
					$stmt = $pdo -> prepare("SELECT * FROM bitacora");
					$stmt -> execute();
					while ($row = $stmt -> fetch()) : ?>
					<a href="#" class="list-group-item list-group-item-action d-flex">
						<div class="d-flex gap-2 py-1 w-100 justify-content-between">
							<div>
								<small class="opacity-50"><?php echo $row['fecha'] ?></small>
								<h6 class="mb-0"><?php echo $row['titulo'] ?></h6>
								<p class="mb-0 opacity-75"><?php echo $row['texto'] ?></p>
							</div>
						</div>
					</a>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="position-sticky">
					<form 
						class="needs-validation" 
						action="create.php" 
						method="POST"
						novalidate>
						<div class="mb-3">
							<label for="titulo" class="form-label">Título</label>
							<input 
								name="titulo" 
								type="text" 
								class="form-control" 
								required>
							<div class="invalid-feedback">
								Debe tener un título.
							</div>
						</div>
						<div class="mb-3">
							<label for="texto" class="form-label">Texto</label>
							<textarea 
								name="texto" 
								type="text" 
								class="form-control"
								rows="8" 
								required></textarea>
							<div class="invalid-feedback">
								Debe contener texto.
							</div>
						</div>
						<div class="mb-3">
							<input 
								type="submit"
								class="btn btn-dark" 
								value="Agregar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>