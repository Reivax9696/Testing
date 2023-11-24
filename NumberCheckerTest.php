<?php

use PHPUnit\Framework\TestCase;

require_once 'c:\Users\Usuario\Desktop\numberchecker\NumberChecker.php'; 

class NumberCheckerTest extends TestCase {

    public function testIsEven()
    {
        $isEvenChecker = new NumberChecker(10);
        $this->assertTrue($evenChecker->isEven());

        $isOddChecker = new NumberChecker(11);
        $this->assertFalse($oddChecker->isEven());
    }

    public function testIsPositive()
    {
        $positiveChecker = new NumberChecker(10);
        $this->assertTrue($positiveChecker->isPositive());

        $negativeChecker = new NumberChecker(-10);
        $this->assertFalse($negativeChecker->isPositive());
    }

}

?>