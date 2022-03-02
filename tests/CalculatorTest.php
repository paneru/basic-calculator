<?php 

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calulator = new App\Calculator;

        $result = $calulator->add(40, 5);

        $this->assertEquals(45,$result);
    }

    public function testSubtract()
    {
        $calulator = new App\Calculator;

        $result = $calulator->subtract(40, 5);

        $this->assertEquals(35,$result);
        $this->assertEquals(15, $calulator->subtract(35, 20));
    }


}