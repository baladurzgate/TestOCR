<?php

function rollaDice(){
		
	$result = mt_rand(1, 6);

	return $result;

}

$dice_1 = rollaDice();

$dice_2 = rollaDice();

$sum = dice_1+dice_2;

$message = "";

if($sum < 12){

	$message = ($dice_1."  ".$dice_2." = ".$sum."   perdu ! ");

}else{
		
	$message = ($dice_1."  ".$dice_2." = ".$sum."   gagné ! ");
		
}

?>
<html>
	<body style = "width:700px ; margin:0 auto;">
		<?php echo $message; ?>
	</body>
</html>





