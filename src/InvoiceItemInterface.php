<?php


// product osoba
// product cijena
// totalna cijena

// Product entity
// * amount of product
// * item price
// * total price

interface InvoiceItemInterface {
	
	public function setAmountOfProduct($amount_of_product);
	public function setItemPrice($item_price);
	public function setTotalPrice($total_price);
	

}