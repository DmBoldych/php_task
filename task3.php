<form action = "<?= $_SERVER['PHP_SELF']; ?>" method="post">
	<p> Введите число: <input type="text" name="chislo" /></p>
	<input type="submit" />
</form>

<?
	//$dateTimes = date("H:i:s");
	//echo 'Текущее время  '.$dateTimes.'<br>';
	
	$S = (int)($_POST['chislo']);
 	for ($i = 0; $S > 5; $i++) {
        $S = $S-5;
    }
	if ($S >= 1 && $S <= 3) {
        echo "Горит зеленый";
    }
	if ($S == 4 or $S == 5) {
        echo "Горит красный";
    }
?>
