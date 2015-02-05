<?php 
// namespace Assignment\Invoice;

abstract Class Invoice implements InvoiceInterface
{

	protected $date_of_creation;

    protected $due_date;

    protected $total_bruto;

    protected $tax_amount;

    protected $name;

    protected $address;

	/**
	*
	* Setting the date of creation
	*
	**/
	public function setDateOfCreation($date_time){
		$this->date_of_creation = $date_time;
		return true;
	}

	/**
	*
	* Setting the due date
	*
	**/
	
	public function setDueDate($due_date){
		$this->due_date = $due_date;
		return true;
	}

	/**
	*
	* Setting the total brutto amount
	*
	**/
	
	public function setTotalBrutoAmount($total_bruto){
		$this->total_bruto = $total_bruto;
		return true;
	} 

	/**
	*
	* Setting the total tax amount
	*
	**/
	
	public function setTaxAmount(){
 		$tax = $this->total_bruto;
		$taxi = $tax / 100 * 25;
		$this->tax_amount = $taxi;
		return true;
	}

	/**
	*
	* Setting the Text info about customer
	*
	**/
	
	public function setTextInfoCustomer($name,$address){
		$this->name = $name;
		$this->address = $address;
		return true;
	}

	
	
}