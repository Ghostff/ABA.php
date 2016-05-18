<?php
class url extends urlcontrols
{
	public function index(){
		$this->page()->html('hey');
	}
}
new url();
?>