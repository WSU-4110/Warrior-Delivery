<?

use \PHPUnit\Framework\TestCase;
class MockTest extends TestCase
{
    //public class should be initialize with test
    public function testMock()
    {
//        $mailer = new Mailer;
        $mock = $this->createMock(Mailer::class);
        
        $mock->method('sendMessage')
             ->willReturn(true);
        
        $result = $mock->sendMessage('sanaz.rabinia@Wayne.edu', 'You have successfully registered!');
        
//        var_dump($result);
        $this->assertTrue($result);
    
    }
    
}



?>