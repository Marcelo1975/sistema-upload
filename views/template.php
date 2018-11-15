<!DOCTYPE html>
<html>
<head>
	<title>Upload de IMGs Áudio e Vídeos com PHP-7 e MYSQL</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
</head>
<body>
	<header>
		<h1 class="text-justify text-center">Upload de img, áudio e vídeo com PHP-7 e mysql</h1>
	</header>
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<footer>
		<span>&copy; <?php echo date('Y'); ?> - Todos os direitos reservados</span>
	</footer>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
</body>
</html>