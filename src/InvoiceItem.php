<?php	

abstract Class InvoiceItem extends Invoice {


	protected $amount_of_product;

	protected $item_price;

	protected $total_price;

	/**
	*
	* Setting the total amount of product
	*
	**/
	
	public function setAmountOfProduct($amount_of_product){
		$this->amount_of_product = $amount_of_product;
		return true;
	 }

	 /**
	 *
	 * Setting the item price
	 *
	 **/
	 
	public function setItemPrice($item_price) {
		$this->item_price = $item_price;
		return true;
	} 

	/**
	*
	* Setting the total price
	*
	**/
	
	public function setTotalPrice($total_price){
		$this->total_price =$total_price;
		return true;
	}
	
}
