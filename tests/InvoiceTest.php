<?php


class Invoice extends PHPUnit_Framework_TestCase {
	
	/**
	*
	* Assert if name is set correctly
	*
	**/
	
	public function testSetNameCorrectly() {	
		$product = new Product;
		$b = $product->setName('Novi');
		$this->assertTrue($b);
	}

	/**
	*
	* Assert if false category is select does it return false
	*
	**/
	
	public function testCategoryIsNotCorrect(){
		$prod = new Product;
		$c = $prod->setCategory("Lorem");
		$this->assertFalse($c);
	}


}