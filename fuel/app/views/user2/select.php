<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<head>
		<title><?php echo $title ?></title>
		<style>table,td{border:solid 1px black;}table{border-collapse:collapse;}
		</style>
	</head>
	<body>
		<h1><?php echo $title; ?></h1>
		<?php if ( ! empty($users)) : ?>
			<table>
				<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo $user['name']; ?></td>
						<td><?php echo $user['email']; ?></td>
						<td><?php echo $user['sex']; ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		<?php else : ?>
			<div>登録データがありません。</div>
		<?php endif; ?>
	</body>
</html>