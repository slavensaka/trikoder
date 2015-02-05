<?php

Class Product extends InvoiceItem  {

	protected $name;

	protected $category; 

	/**
	*
	* Setting the name
	*
	**/
	
	public function setName($name) {
		$this->name = $name;
		return true;
	}

	/**
	*
	* Setting the category
	*
	**/
	
	public function setCategory($category){
	$products = array("Mac", "NT", "Win", "Linux");
		if (in_array($category, $products)) {
    		 $this->category = $products;
    		 return true;
		} else return false;
	}

	/**
	*
	* Inserting the product into the database
	*
	**/
	
	public function setProduct($invoice_item, $invoice_id, $name, $category) {
		// include 'src/connect.php';
		// Invoice::connectdb();
		// require 'vendor/autoload.php';
		include 'src/connect.php';
		$query = "INSERT INTO product(Invoice_item_idInvoiceItem, Invoice_idInvoice, name, category) VALUES ('$invoice_item','$invoice_id','$name','$category')";
		$rezultat1 = $db->query($query) or die(mysql_error);
	}

	/**
	*
	* Selecting all products
	*
	**/
	
	public function getAllProducts(){
		include 'src/connect.php';
	    $query = "SELECT * FROM invoice";
		return $rezultat = $db->query($query) or die(mysql_error);


	 }
}