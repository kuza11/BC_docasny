<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$file = fopen("test.json", "w");
	fwrite($file, file_get_contents("php://input"));
	echo file_get_contents("php://input");
	fclose($file);
} else 
{
	$file = fopen("test.json", "r");
	echo fgets($file);
	fclose($file);

}
 ?>
 