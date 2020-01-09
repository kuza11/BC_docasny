<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$file = fopen("test.json", "w");
	fwrite($file, $_POST["data"]);
	fclose($file);
} else 
{
	$file = fopen("test.json", "r");
	echo fgets($file);
	fclose($file);
}
 ?>
 