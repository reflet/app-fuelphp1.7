<?php echo Html::doctype('html5'); ?>
<html lang="ja">
<head>
	<?php echo Html::meta('charset', 'utf-8'); ?>
	<title>メンバー詳細</title>
</head>
<body>
	ようこそ、<?php echo $name; ?>さん！<br>
	<?php echo Html::anchor('staff/list', '> 一覧へ'); ?>
</body>
</html>
