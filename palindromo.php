<?php
	function Palindromo($str){

		$inverte = strrev($str);
		if($inverte == $str){
			echo "String " . $str . " = true";
		}else{
			echo "String " . $str . " = false";
		}

		
	}

	Palindromo("aabaa");
	?><br><?php 
	Palindromo("a");
	?><br><?php 
	Palindromo("abac");

?>