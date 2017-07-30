<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css(array('bootstrap.css', 'bootstrap-theme.css')); ?>
</head>
<body>
	Welcome, <?php echo $username; ?>
</body>
</html>