<?php

use PHPUnit\Framework\TestCase;
require_once 'src/ejercicio2_SpeedRadarSensor.php';

class SpeedRadarSensorTest extends TestCase
{
    public function testisTooSlow () // < 30
    {
        $speedRadarSensor = new SpeedRadarSensor(25);
        $result = $speedRadarSensor->speedSensor();
        $this->assertSame("too slow", $result);
    }
    public function testisAdequate() //<= 60
    {
        $speedRadarSensor = new SpeedRadarSensor(55);
        $result = $speedRadarSensor->speedSensor();
        $this->assertSame("is adequate", $result);
    }
    public function testisFast() //<= 80
    {
        $speedRadarSensor = new SpeedRadarSensor(75);
        $result = $speedRadarSensor->speedSensor();
        $this->assertSame("is fast", $result);
    }
    public function testisTooFast() //<= 100
    {
        $speedRadarSensor = new SpeedRadarSensor(95);
        $result = $speedRadarSensor->speedSensor();
        $this->assertSame("is too fast", $result);
    }
    public function testisDangerous() //el resto ?
    {
        $speedRadarSensor = new SpeedRadarSensor(120);
        $result = $speedRadarSensor->speedSensor();
        $this->assertSame("way too fast", $result);
    }
}



?>