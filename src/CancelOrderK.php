<?php
class CancelOrderK
{
	public $ID;
	public $reason;
	
	public function __construct($ID, $reason)
	{
		$this->ID = $ID;
		$this->reason = $reason;
	}
	
	public function getID()
	{
		return $this->ID;
	}
	
	public function getReason()
	{
		return "$this->reason";
	}
	
}
?>