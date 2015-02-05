<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php
require 'vendor/autoload.php';

/**
*
* Crude testing
*
**/

$invoice_1 = new Product;
$date_time = date("Y-m-d H:i:s");	
$invoice_1->setDateOfCreation($date_time);

$date = strtotime($date_time);
strtotime("+7 day", $date);
$date =  date("Y-m-d",$date+86400);

$invoice_1->setDueDate($date);

$bruto = 7000;
$invoice_1->setTotalBrutoAmount($bruto);
$invoice_1->setTaxAmount();

$name_of_man ="Slaven";
$address_of_mane = "Vijenac";
$invoice_1->setTextInfoCustomer($name_of_man,$address_of_mane);

$invoice_1->getAllProducts();
// echo $invoice_1->due_date;

?>
</body>
</html>