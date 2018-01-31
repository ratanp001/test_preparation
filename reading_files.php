<?php


$file= 'test.txt';

if($handle = fopen($file,'r')){

	$material = fread($handle,filesize($file));
	echo $material;
	fclose($handle);	
}else
{

	echo "We cannot write on the file";
}


?>	