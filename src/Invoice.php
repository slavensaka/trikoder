<?php 
// namespace Assignment\Invoice;

// id
// kada stvoreno
// do kada platit
// totalni bruto cijena
// totalni tax cijena ( 25% od gornjeg)
// tekst o kupcu
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
	* Block comment
	*
	**/
	public function setDateOfCreation($date_time){
		$this->date_of_creation = $date_time;
		return true;
	}


	public function setDueDate($due_date){
		$this->due_date = $due_date;
		return true;
	}

	public function setTotalBrutoAmount($total_bruto){
		$this->total_bruto = $total_bruto;
		return true;
	} 

	public function setTaxAmount(){
 		$tax = $this->total_bruto;
		$taxi = $tax / 100 * 25;
		$this->tax_amount = $taxi;
		return true;
	}

	public function setTextInfoCustomer($name,$address){
		$this->name = $name;
		$this->address = $address;
		return true;
	}

	
	
}