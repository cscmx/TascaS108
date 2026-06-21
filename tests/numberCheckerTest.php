<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
require_once 'src/numberChecker.php';

class numberCheckerTest extends TestCase

{/*
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
*/
    //TEST CON DATA PROVIDER 
    #[DataProvider('isPositiveDataProvider')]
    public function testPositiveNumChecker(int $number, bool $expected): void 
    {
        $numberChecker = new NumberChecker($number);
        $resultado = $numberChecker->isPositive();
        $this->assertSame($expected,$resultado);
    }
    
    #[DataProvider('isEvenDataProvider')]
    public function testEvenNumChecker(int $number, bool $expected): void 
    {
        $numberChecker = new NumberChecker($number);
        $resultado = $numberChecker->isEven();
        $this->assertSame($expected,$resultado);
    }

    public static function isPositiveDataProvider(): array 
    {
        return array (
            array(0, false),
            array(1, true),
            array(-2, false)
        );
    }

    public static function isEvenDataProvider(): array 
    {
        return array (
            array (1, false),
            array(2, true),
            array(-2, true),
            array(-1, false)
        );
    }


}