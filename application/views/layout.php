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
</body>
</html>