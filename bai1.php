<?php
$n = 3;
$array = [11,2,8,10,5,99,1,8,9];
function restructAraray($array, $n) {
	$result = [];
	$leng = count($array);
	if($leng % $n != 0) {
		return "Không hợp lệ";
	}
	$arraryChuk = array_chunk($array, $n);
	for($i = 0; $i < $n; $i++) {
		foreach($arraryChuk as $subArray) {
			$result[] = $subArray[$i];
		}
	}
	return $result;
}
$newArray = restructAraray($array, $n);
print_r($newArray);