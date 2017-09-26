<?php
/**
 * 找出path相对与conpath的路径
 */
function getRelativePath($path, $conpath) {
	$pathArr = explode("/", $path);
	$conpathArr = explode("/", $conpath);
	$dismatch = 0;
	for ($i = 0; $i < count($pathArr); $i++) { 
		if ($pathArr[$i] != $conpathArr[$i]) {
			$dismatch = count($pathArr)-$i;
			$left = array_slice($pathArr, $i);
			break;
		}
	}
	return str_repeat("../", $dismatch).implode("/", $left);
}

$a = '/a/b/c/d/e.php';
$b = '/a/b/12/34/5.php';
echo getRelativePath($a, $b);
// 结果：../../../c/d/e.php