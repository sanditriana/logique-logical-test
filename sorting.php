<?php
	$array = array(3,2,1);
	$totalArr = count($array);
	
	for ($i = 0; $i < $totalArr; $i++) {
	    for ($j = $i + 1; $j < $totalArr; $j++) {
	        if ($array[$i] > $array[$j]) {
	            $temp = $array[$i];
	            $array[$i] = $array[$j];
	            $array[$j] = $temp;
	        }
	    }
	}

echo json_encode($array);
?>