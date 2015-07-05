function rollaDice(){

	return Math.floor((Math.random()*6)+1);

}

var dice_1 = rollaDice();

var dice_2 = rollaDice();

var sum = dice_1+dice_2;

if(sum < 12){

	alert  (dice_1+"  "+dice_2+" = "+sum+"   perdu ! ");

}else{
		
	alert  (dice_1+"  "+dice_2+" = "+sum+"   gagné ! ");
		
}






