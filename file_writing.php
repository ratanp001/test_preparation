<?php


$file= 'test.txt';

if($handle = fopen($file,'w')){

	fwrite($handle, "hi world ");
	fclose($handle);	
}else
{

	echo "We cannot write on the file";
}


?>	