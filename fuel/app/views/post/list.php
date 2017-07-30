<?php echo Html::doctype('html5'); ?>
<html lang="ja">
<head>
	<?php echo Html::meta('charset', 'utf-8'); ?>
	<title>投稿一覧ページ</title>
</head>
<body>
	<?php if ( ! empty($rows)) : ?>
		<?php foreach ($rows as $row): ?>
			<div style="background-color:#999;">
				<?php echo $row['title']; ?>
			</div>
			<div>
				<?php echo $row['summary']; ?>
			</div>
			<div>
				<?php echo nl2br($row['body']); ?>
			</div>
		<?php endforeach; ?>
	<?php else : ?>
		<div>
			投稿がありません。
		</div>
	<?php endif; ?>
</body>
</html>