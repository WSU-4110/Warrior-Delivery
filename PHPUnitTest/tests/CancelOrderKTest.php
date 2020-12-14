<?
use PHPUnit\Framework\TestCase;



class CancelOrderKTest extends TestCase
{
	public function testIfIdIsNumber()
	{ 
		$order = new CancelOrderK(72, "Out of Stock");
		$this->assertSame(72, $order->getID());
	}
	
	public function testIfReasonIsString()
	{ 
		$order = new CancelOrderK(72, "Out of Stock");
		$this->assertSame("Out of Stock", $order->getReason());
	}
}

?>