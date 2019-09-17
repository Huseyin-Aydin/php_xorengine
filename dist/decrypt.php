<?php
if($_POST)
{
	include './class.XOREngine.php';
	$xor=new XOREngine();
	echo $xor->decrypt(base64_decode($_POST['enctext']),$_POST['enckey']);
}
?>