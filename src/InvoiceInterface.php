<?php

interface InvoiceInterface {
	
	public function setDateOfCreation($date_time);
	public function setDueDate($due_date);
	public function setTotalBrutoAmount($total_bruto);
	public function setTaxAmount();
	public function setTextInfoCustomer($name,$address);

}