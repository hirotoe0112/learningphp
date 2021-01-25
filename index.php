<?php $colors = ['赤', '青', '黄', '白', '黒']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP版 | My PHP Learning Site</title>
</head>
<body>
	本日は<?=date('Y年m月d日')?>です。<br>
	本日のラッキーカラーは<?=$colors[random_int(0,4)]?>です。

	<p>
		<?php $greeting = 'hello world'; ?>
		<?php echo $greeting; ?>
	</p>

	<p>
		<?php
			echo '一つのphpタグの中に全てを記述';
			echo '<br>';
			echo '改行テスト';
?>

		<?php
			$tax = 500 * 1.08;
		?>
		<p>
			税込み金額は<?php echo $tax; ?>円です。
		</p>

		<p>
<?php
				$connection = 'つなげる';
			print '文字列'.'と'.'文字列'.'を'.$connection;
?>
		</p>

		<p>
<?php
			echo 'connectionという変数のデータ型は',var_dump($connection),'です'
?>

</body>
</html>
