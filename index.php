<?php
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
			<div class="col-sm-12 col-md-6">
				<div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action d-flex">
							<div class="d-flex gap-2 w-100 justify-content-between">
								<div>
								<small class="opacity-50">1w</small>
									<h6 class="mb-0">List group item heading</h6>
									<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item list-group-item-action d-flex">
							<div class="d-flex gap-2 w-100 justify-content-between">
								<div>
								<small class="opacity-50">1w</small>
									<h6 class="mb-0">List group item heading</h6>
									<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item list-group-item-action d-flex">
							<div class="d-flex gap-2 w-100 justify-content-between">
								<div>
								<small class="opacity-50">1w</small>
									<h6 class="mb-0">List group item heading</h6>
									<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<form 
					action="create.php" 
					method="POST">
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Example label</label>
						<input 
							name="" 
							type="text" 
							class="form-control" 
							placeholder="Example input placeholder">
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput2" class="form-label">Another label</label>
						<input 
							name="" 
							type="text" 
							class="form-control" 
							placeholder="Example input placeholder">
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>