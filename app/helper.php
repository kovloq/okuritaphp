<?php 
function commission($price){
	if($price<=7000){
		return 700;
	}else{
		return round($price*0.1);
	}
}
?>