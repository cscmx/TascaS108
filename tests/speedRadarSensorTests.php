<?php

use PHPUnit\Framework\TestCase;
require_once 'src/ejercicio2_SpeedRadarSensor.php';

class SpeedRadarSensorTest extends TestCase
{
    public function testisTooSlow () // < 30
    {
        $speedRadarSensor = new SpeedRadarSensor(25);
        $result = $speedRadarSensor->speedSensor();
        $this->assertSame("Too Slow", $result);

    }
    public function testisAdecuate() //<= 60
    {

    }
    public function testisFast() //<= 80
    {

    }
    public function testisTooFast() //<= 100
    {

    }
    public function testisDangerous() //el resto ??
    {

    }
}



?>