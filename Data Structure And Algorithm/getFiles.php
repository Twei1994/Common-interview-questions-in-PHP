<?php
/**
 * 遍历一个路径下的所有文件
 */
function finddir($dir){
	$files = array();
	if(is_dir($dir)){
		if($handle = opendir($dir)){
			while(($file = readdir($handle)) !== false){
				if($file != '.' && $file != '..'){
					if(is_dir(rtrim($dir, '/').'/'.$file)){
						$files[$file] = finddir(rtrim($dir, '/').'/'.$file);
					}else{
						$files[] = rtrim($dir, '/').'/'.$file;
					}
				}
			}
			closedir($handle);
		}
	}
	return $files;
}
print_r(finddir('F:/Golang/src'));
//结果：
Array
(
    [0] => F:/Golang/src/hello.go
    [1] => F:/Golang/src/src.exe
    [test] => Array
        (
            [0] => F:/Golang/src/test/sss.txt
        )
)