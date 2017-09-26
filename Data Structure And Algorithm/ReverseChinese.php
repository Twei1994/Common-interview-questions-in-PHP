<?php
function reverse($str){
	$r = array();
	for($i=0; $i<mb_strlen($str); $i++){
		$r[] = mb_substr($str, $i, 1, 'UTF-8');
	}
	return implode(array_reverse($r));
}
echo reverse('www.phpha.com天涯PHP博客');
// 结果：客博PHP涯天moc.ahphp.www