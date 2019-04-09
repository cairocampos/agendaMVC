<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Crud MVC</title>
		<link rel="stylesheet" href="<?php echo BASE_URL;?>bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASE_URL;?>bootstrap/css/style.css">
	</head>
	<body>

		<div class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>		
		</div>

		<script type="text/javascript" src="<?php echo BASE_URL; ?>bootstrap/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>bootstrap/js/script.js"></script>
	</body>
</html>