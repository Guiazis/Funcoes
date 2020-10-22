<?php
	function CalculaArea($num){
		$result = pow($num,2)+pow($num-1,2);
		echo "N " . $num . " = " . $result;
	}

	CalculaArea(2);
	?><br><?php 
	CalculaArea(3);

?>