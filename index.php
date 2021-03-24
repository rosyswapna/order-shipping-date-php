<?php

//require "vendor/autoload.php";
require "config.php";
require "functions.php";

if(isset($_POST['placeOrder'])){
	$orderDate = date('Y-m-d');
	$oderTime = date("H:i:s");
	echo "Shipping Date : ".getShippingDate($orderDate, $oderTime);
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Place Order</h2>

<form action="" method="post">
  
  <input type="submit" value="Place Order" name="placeOrder" >
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>





