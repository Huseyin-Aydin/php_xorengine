<?php
class XOREngine
{
	function encrypt($text,$key){$xor1=strlen($text);$xor2=strlen($key);
	for($i=0;$i<$xor1;$i++){
		for($j=0;$j<$xor2;$j++){
			$text[$i]=$text[$i]^$key[$j];
		}
	}
	return $text;
}
function decrypt($text,$key){$xor1=strlen($text);$xor2=strlen($key);
	for($i=0;$i<$xor1;$i++)
	{
		for($j=0;$j<$xor2;$j++)
		{
			$text[$i] = $key[$j]^$text[$i];
		}
	}
	return $text;
	}
}
//$xor->encrypt(text,key);
//$xor->decrypt(text,key);
?>