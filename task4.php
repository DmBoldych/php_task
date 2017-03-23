<form action = "<?= $_SERVER['PHP_SELF']; ?>" method="post">
	<p> Введите число: <input type="text" name="chislo" /></p>
	<input type="submit" />
</form>

<?
	$n = (int)$_POST['chislo'];
	$i = 0;
	$S = 0;
	
	while ($i != $n) {
		$k = 0;
		$i = $i + 1;
		$k = $i * $i;
		echo $i." в квадрате = ".$k. "<br/>";
		$S = $S + $k;
	}
	echo "Сумма квадратов = ".$S;
?>