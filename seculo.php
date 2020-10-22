<?php
	function SeculoAno($ano){
		if($ano > 0){
			if($ano%100 == 0){
				$sec = $ano/100;
				echo " Ano " . $ano . " = Século ". $sec;
			}else{
				$sec1 = intval($ano/100)+1;
				echo " Ano " . $ano . " = Século ". $sec1;
			}
		}
	}

	SeculoAno(1905);
	?><br><?php 
	SeculoAno(1700);
?>