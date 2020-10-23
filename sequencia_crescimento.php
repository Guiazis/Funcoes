<?php
	function getDuplicates( $array ) {
        return array_unique( array_diff_assoc( $array, array_unique($array ) ) );
    }
    function SequenciaCrescente($array){
        $cont = 0;
        $qtd = count($array);
        $ini = $array[0];

        $duplicates = getDuplicates($array);

        if(!empty($duplicates)){
            if(count($duplicates)>1){
                $cont+= count($duplicates);
            }else{
                if($qtd <= 2){
                    $cont = $cont;
                }else{
                    $cont++;
                }

            }

        }
        for ($i = 1; $i < $qtd; $i++) {

            if($i == $qtd - 1){

                if($array[$i] < $array[0] && $array[$i] < $array[1]){
                    $cont = 3;
                }
            }
            if ($ini >= $array[$i]) {
                //if($i != 1){
                $cont ++;
                $ini = $array[$i];
                }
            else{
                $ini = $array[$i];
            }
        }
        echo "[";
        for ($f=0; $f < $qtd; $f++) { 
        	echo $array[$f];
        }
        if ($cont > 1) {
            echo "] false";
        }else{
            echo "] true";
        }
    }
	SequenciaCrescente([1,3,2,1]);
	?><br><?php
	SequenciaCrescente([1,3,2]);
	?><br><?php
	SequenciaCrescente([1,2,1,2]);
	?><br><?php
	SequenciaCrescente([3,6,5,8,10,20,15]);
	?><br><?php
	SequenciaCrescente([1,1,2,3,4,4]);
	?><br><?php
	SequenciaCrescente([1,4,10,4,2]);
	?><br><?php
	SequenciaCrescente([10,1,2,3,4,5]);
	?><br><?php
	SequenciaCrescente([1,1,1,2,3]);
	?><br><?php
	SequenciaCrescente([0,-2,5,6]);
	?><br><?php
	SequenciaCrescente([1,2,3,4,5,3,5,6]);
	?><br><?php
	SequenciaCrescente([40,50,60,10,20,30]);
	?><br><?php
	SequenciaCrescente([1,1]);
	?><br><?php
	SequenciaCrescente([1,2,5,3,5]);
	?><br><?php
	SequenciaCrescente([1,2,5,5,5]);
	?><br><?php
	SequenciaCrescente([10,1,2,3,4,5,6,1]);
	?><br><?php
	SequenciaCrescente([1,2,3,4,3,6]);
	?><br><?php
	SequenciaCrescente([1,2,3,4,99,5,6]);
	?><br><?php
	SequenciaCrescente([123,-17,-5,1,2,3,12,43,45]);
	?><br><?php
	SequenciaCrescente([3,5,67,98,3]);

?>