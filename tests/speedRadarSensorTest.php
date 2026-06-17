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
    public function testisAdequate() //<= 60
    {
        $speedRadarSensor = new SpeedRadarSensor(55);
        $result = $speedRadarSensor->speedSensor();
        $this->assertSame("Is Adequate", $result);
    }
    public function testisFast() //<= 80
    {
        $speedRadarSensor = new SpeedRadarSensor(75);
        $result = $speedRadarSensor->speedSensor();
        $this->assertSame("Is Fast", $result);
    }
    public function testisTooFast() //<= 100
    {

    }
    public function testisDangerous() //el resto ??
    {

    }
}



?>