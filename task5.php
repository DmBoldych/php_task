<?
	$holidays = ['01-01', '01-07', '02-23', '03-08', '05-01', '05-09'];
    $date = new DateTime();
    if ($date->format('H') <= 20) {
        $ship = $date->add(new DateInterval('P1D'));
    } else {
        $ship = $date->add(new DateInterval('P2D'));
    }
 
    while (in_array($ship->format('m-d'), $holidays)) {
        $ship = $ship->add(new DateInterval('P1D'));
    }
    echo 'Доставка ', $ship->format('d');
	echo " " . getMonthRus() . "<br>";
	
	
	function getMonthRus($num_month = false) {
		if(!$num_month) {
		$num_month = date('n');
		}
		$monthes = array(
				1 => 'Января' , 2 => 'Февраля' , 3 => 'Марта' , 4 => 'Апреля' , 5 => 'Мая' , 6 => 'Июня' ,
				7 => 'Июля' , 8 => 'Августа' , 9 => 'Сентября' , 10 => 'Октября' , 11 => 'Ноября' , 12 => 'Декабря'
		);
		$name_month = $monthes[$num_month];
		return $name_month;
	}
?>