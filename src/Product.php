<?php
// ime
// kategorija

// * name
// * category (assume predefined flat list of categories)
Class Product extends InvoiceItem  {


	protected $name;

	protected $category; 


	public function setName($name) {
		$this->name = $name;
		return true;
	}
	public function setCategory($category){

	$products = array("Mac", "NT", "Win", "Linux");
		if (in_array($category, $os)) {
    		 $this->category = $products;
    		 return true;
		}
	}

	public function setProduct($invoice_item, $invoice_id, $name, $category) {
		// include 'src/connect.php';
		// Invoice::connectdb();
		// require 'vendor/autoload.php';
		include 'src/connect.php';
		$query = "INSERT INTO product(Invoice_item_idInvoiceItem, Invoice_idInvoice, name, category) VALUES ('$invoice_item','$invoice_id','$name','$category')";
		$rezultat1 = $db->query($query) or die(mysql_error);
	}

	public function getAllProducts(){
		include 'src/connect.php';
	    $query = "SELECT * FROM invoice";
		return $rezultat = $db->query($query) or die(mysql_error);


	 }
}