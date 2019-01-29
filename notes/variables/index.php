<?php

$cars = array('Honda','Toyota','Ford');

foreach($cars as $car)
{
	echo $car.'<br/>';
}

$length = sizeof($cars);
for ($car = 0;$car < $length; $car++)
	{
		$add = $car+1;
        echo    "$add: $cars[$car]<br/>";
	}
	
	



?>
