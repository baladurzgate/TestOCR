<?php

function rollaDice(){
		
	$result = mt_rand(1, 6);

	return $result;

}

$dice_1 = rollaDice();

$dice_2 = rollaDice();

$sum = dice_1+dice_2;

if($sum < 12){

	echo($dice_1."  ".$dice_2." = ".$sum."   perdu ! ");

}else{
		
	echo($dice_1."  ".$dice_2." = ".$sum."   gagné ! ");
		
}

?>






