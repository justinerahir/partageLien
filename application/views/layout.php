<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> <?= $titre ?> </title>
	<link rel="stylesheet" type="text/css" href="<?= site_url().CSS_DIR.'style.css'?>">
</head>
<body>
	<section id="content">
		<h1><?= $titre ?></h1>

		<?= $vue ?>
	</section>
	<script src="<?= base_url() ?>web/js/jquery.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>web/js/script.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>web/js/ajax.js" type="text/javascript"></script>
</body>
</html>