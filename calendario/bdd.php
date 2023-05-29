<?php
try
{
	$bdd = new PDO('mysql:host=mysql;dbname=calendar;charset=utf8', 'pulgar', 'pulgarsin');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
