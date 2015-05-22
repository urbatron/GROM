<?php

function get($mail){

try{
$DBH = new PDO('mysql:host = localhost;dbname = php;','root','');
$STH = $DBH->prepare("INSERT INTO email (email) VALUES ('$mail')");
$STH->execute();
}catch(Exception $e){
	echo iconv("windows-1251","utf-8",$e->getMessage());
}
}

if($_SERVER['REQUEST_METHOD'] = "POST" and !empty($_POST['email'])){
	get(strip_tags($_POST['email']));
}
?>
