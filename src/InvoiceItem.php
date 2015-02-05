<?php

// product osoba
// product cijena
// totalna cijena

// Product entity
// * amount of product
// * item price
// * total price

	

abstract Class InvoiceItem extends Invoice {


	protected $amount_of_product;

	protected $item_price;

	protected $total_price;

	public function setAmountOfProduct($amount_of_product){
		$this->amount_of_product = $amount_of_product;
		return true;
	 }

	public function setItemPrice($item_price) {
		$this->item_price = $item_price;
		return true;
	} 

	public function setTotalPrice($total_price){
		$this->total_price =$total_price;
		return true;
	}
	
}
