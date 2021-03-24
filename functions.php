<?php
//set timezone
date_default_timezone_set("Asia/Calcutta"); 

//$date - Y-m-d format
function getShippingDate($orderDate, $orderTime) {
	global $cutOffTime,$holidays;

	$orderDay = date('l',strtotime($orderDate));
	$orderHr = date('H',strtotime($orderTime));

	//ship sameday
	if($orderHr < 11 && !in_array($orderDay, $holidays)){
		$shippingDate = date('Y-m-d', strtotime($orderDate));
	}else{
		//find next allowed shipping day
		$shippingDate = false;
		for($i=1; $i < 7; $i++){
			$nextDay = date('l', strtotime('+'.$i.' day', strtotime($orderDate)));
			
			if(!in_array($nextDay,$holidays)){
				$shippingDate = date('Y-m-d', strtotime('+'.$i.' day', strtotime($orderDate)));
				break;
			}
		}
	}

	return $shippingDate;
}

?>