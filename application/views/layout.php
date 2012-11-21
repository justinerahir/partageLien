<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> <?= $titre ?> </title>
	<link rel="stylesheet" type="text/css" href="<?= site_url().CSS_DIR.'styles.css'?>">

	
</head>
<body>
	<div>
		<h1><?= $titre ?></h1>

		<?= $vue ?>
	</div>
	<div class="loading">
		<img src="././web/img/indicator.svg" alt="loading..." width="60" />
	</div>
	<script src="<?= base_url() ?>web/js/jquery.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>web/js/script.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>web/js/ajax.js" type="text/javascript"></script>
</body>
</html>