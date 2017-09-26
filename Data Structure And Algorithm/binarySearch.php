<?php
function binarySearch1($list, $low, $high, $value) {
	while ($low <= $high) {
		$mid = floor(($low+$high)/2);
		if ($list[$mid] == $value) {
			return $mid;
		}elseif ($list[$mid] < $value) {
			$low = $mid+1;
		}else{
			$high = $mid-1;
		}
	}
	return false;
}

function binarySearch2($list, $low, $high, $value) {
	if ($low > $high) {
		return false;
	}else{
		$mid = floor(($low+$high)/2);
		if ($list[$mid] == $value) {
			return $mid;
		}elseif ($list[$mid] < $value) {
			return binarySearch2($list, $mid+1, $high, $value);
		}else{
			return binarySearch2($list, $low, $mid-1, $value);
		}
	}
}

$list = range(1, 10);
echo binarySearch1($list, 0, count($list)-1, 3);  // 2
echo binarySearch2($list, 0, count($list)-1, 4);  // 3