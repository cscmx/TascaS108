<?php

use PHPUnit\Framework\TestCase;
require_once 'src/numberChecker.php';

class numberCheckerTest extends TestCase

{
    public function testisEven() 
    {    
        $numberChecker = new numberChecker(4);
        $resultado = $numberChecker->isEven();
        $this->assertSame(true, $resultado);
    }

    public function testisPositive()
    {
        $numberChecker = new numberChecker(1);
        $resultado = $numberChecker->isPositive();
        $this->assertSame(true, $resultado);

    }

    public function testisZero()
    {
        $numberChecker = new numberChecker(0);
        $resultado = $numberChecker->isPositive();
        $this->assertSame(false, $resultado);
    }
}