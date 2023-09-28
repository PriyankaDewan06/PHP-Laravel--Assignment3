<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$odd_numbers = [];

foreach ($numbers as $number) {
	if ($number % 2 === 1) {
		$odd_numbers[] = $number;
	}
}

print_r($odd_numbers);


?>