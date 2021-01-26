<?php $colors = ['赤', '青', '黄', '白', '黒']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP版 | My PHP Learning Site</title>
</head>
<body>
	<?php
		//ここは定数ゾーン
		define('TAX',1.1);
	?>

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
	</p>

	<p>
		<?php
			$tax = 500 * 1.08;
		?>
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
	</p>

	<p>
		<?php
			$intValue = 10;
			$floatValue = 1.1;
			$stringValue = "文字列です！";
			$stringSingleQuate = '文字列です（シングルクォートで囲んでいます）';
			$boolValue = true;
			$nullValue = null;
			$emptyValue = '';
			echo 'int型：',var_dump($intValue),'<br>';
			echo 'float型：',var_dump($floatValue),'<br>';
			echo 'string型１：',var_dump($stringValue),'<br>';
			echo 'string型２：',var_dump($stringSingleQuate),'<br>';
			echo 'bool型：',var_dump($boolValue),'<br>';
			echo 'null：',var_dump($nullValue),'<br>';
			echo 'empty：',var_dump($emptyValue),'<br>';
		?>
	</p>

	<p>
		<?php
			echo $stringValue.'変数とシングルクォートで囲んだ文字列を連結する<br>';
			echo "ダブルクォート内で変数を展開する⇒{$stringValue}";
		?>
	<p>

	<p>
		<?php
			echo 'エスケープ処理 is \'escape syori\'';
			echo "エスケープ処理 is \"escape syori\"";
		?>
	<p>
	<p>
		<?php
			echo <<< hear
これがヒアドキュメントというものです。<br>
改行のある長い文章を打つのに便利です。<br>
改行されないが。。。なぜ。。。
hear;
		?>
	</p>
	
	<p>
		<?php
			$hairetu = ['hairetu','hahahaha','hihi-n','ra-men'];
			$hairetu[] = 'add1';
			$hairetu[] = 'add2';
			print_r($hairetu);
		?>
	</p>

	<p>
		<?php
			$rensoHairetu = [
				'name' => '山田太郎',
				'age' => 19,
				'address' => '名古屋市南区なんちゃら'
			];

			echo '僕の名前は'.$rensoHairetu['name'].'。年齢は'.$rensoHairetu['age'].'歳だ。住所は'.$rensoHairetu['address'].'だ。';
		?>
	</p>

	<p>
		<!--例えば、csv入力したときに各項目に意味を与えるために使う-->
		<?php
			$tadanohairetu = [1, 'りんご', '青森', 'おいしい'];
			list($no, $name, $address, $feature) = $tadanohairetu;
		?>
		No=<?=$no?><br>
		Name=<?=$name?><br>
		原産地=<?=$address?><br>
		特徴=<?=$feature?>
	</p>

	<?php
		// コメントを外すとそれ以降の出力がされなくなる
		// die('ここで強制終了');
	?>

	<p>
		<?php
			$kakaku = 1400;
			echo '価格：'.$kakaku.'　消費税込み：'.$kakaku * TAX;
		?>
	</p>

	<p>
		<?php
			echo '現在の行番号は',__LINE__,'<br>';
			echo '現在のファイル名は',__FILE__,'<br>';
			echo '現在のディレクトリ名は',__DIR__,'<br>';
			echo '現在の関数名は',__FUNCTION__,'<br>';
			echo '現在のクラス名は',__CLASS__,'<br>';
			echo '現在のメソッド名は',__METHOD__,'<br>';
			echo '現在の名前空間名は',__NAMESPACE__,'<br>';
		?>
	</p>
	
	<p>
		<?php
			// 比較演算子に対してvar_dumpを使うとどうなるのか
			var_dump(85==85);
			var_dump(1==='1');
		?>
	</p>
	
	<p>
		<?php
			$numlist = [1, -10, 8, 13, 0, -2];
			foreach($numlist as &$num){
				if($num < 0){
					$num = 0;
				}
			}
			// unsetでリファレンスを消す（なぜ？）
			// unsetを忘れるとこれ以降でnumに何かを代入したときに配列が上書きされてしまうため。
			unset($num);
			print_r($numlist);
		?>
	</p>



</body>
</html>
