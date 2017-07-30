<?php echo Html::doctype('html5'); ?>
<html lang="ja">
<head>
	<?php echo Html::meta('charset', 'utf-8'); ?>
	<title>メンバー一覧</title>
</head>
<body>
	<div><?php echo $title; ?></div>
	ようこそ、<?php echo $name; ?>さん！
	<?php echo Html::anchor('staff/list', '> 一覧へ'); ?>
</body>
</html>