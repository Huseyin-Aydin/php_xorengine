<?php
if($_POST)
{
	include './class.XOREngine.php';
	$xor=new XOREngine();
	echo base64_encode($xor->encrypt($_POST['enctext'],$_POST['enckey']));
}
?>