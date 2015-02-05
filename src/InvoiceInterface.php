<?php

// id
// kada stvoreno
// do kada platit
// totalni bruto cijena
// totalni tax cijena ( 25% od gornjeg)
// tekst o kupcu

// unique, sequential invoice number
// * date of creation
// * due date
// * total brutto amount
// * total tax amount (assume fixed 25% tax rate) 
// * and a textual info about customer (name, address etc.)

interface InvoiceInterface {
	
	public function setDateOfCreation($date_time);
	public function setDueDate($due_date);
	public function setTotalBrutoAmount($total_bruto);
	public function setTaxAmount();
	public function setTextInfoCustomer($name,$address);

}