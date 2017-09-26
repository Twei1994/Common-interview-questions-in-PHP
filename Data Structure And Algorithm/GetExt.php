<?php
function getExt($url) {
	$data = parse_url($url);
	$path = $data['path'];
	$info = pathinfo($path);
	return $info['extension'];
}
echo getExt('http://blog.phpha.com/archives/1670.html?id=1670');
// 结果： html