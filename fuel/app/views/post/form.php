<?php echo Html::doctype('html5'); ?>
<html lang="ja">
<head>
	<?php echo Html::meta('charset', 'utf-8'); ?>
	<title>フォーム送信</title>
</head>
<body>
	<form method="post" action="/post/save/" accept-charset="utf-8">
		<p>
			<label for="form_title">件名</label>
			<input type="text" name="title" value="" id="form_title">
		</p>
		<p>
			<label for="form_summary">概要</label>
			<input type="text" name="summary" value="" id="form_summary">
		</p>
		<p>
			<label for="form_title">本文</label>
			<textarea name="body" cols="60" rows="8" id="form_body"></textarea>
		</p>
		<div>
			<input type="submit" name="submit" valur="投稿" id="form_submit">
		</div>
	</form>
</body>
</html>