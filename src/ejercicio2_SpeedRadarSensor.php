<?php 

class SpeedRadarSensor 
{
    public function __construct(private int $speed){}
    
    public function speedSensor(): string
    {
        if ($this->speed < 30) 
        {
            return "Too Slow";
        }
        elseif ($this->speed <= 60) 
        {
            return "Is Adequate";
        }
        elseif ($this->speed <= 80)
        {
            return "Is Fast";
        }
    }
    
}