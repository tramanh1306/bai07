<?php
	$i = 0;
	$tong = 0;
	while ($i <= 100) {
		$i++;
		if ($i > 50) 
			continue;
			$tong += $i;
	}
	echo "i: $i <br>";
	echo "Tong: $tong";
?>