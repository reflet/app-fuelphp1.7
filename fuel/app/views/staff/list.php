<?php echo Html::doctype('html5'); ?>
<html lang="ja">
<head>
	<?php echo Html::meta('charset', 'utf-8'); ?>
	<title>スタッフ一覧</title>
</head>
<body>
	<div><?php echo $title; ?></div>
	<table>
		<?php foreach ($staff as $val): ?>
			<tr>
				<td><?php echo sprintf("%05d", $val['id']); ?></td>
				<td><?php echo Html::anchor('staff/top', $val['name']); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>