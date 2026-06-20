<?php 

class SpeedRadarSensor 
{
    public function __construct(private int $speed){}
    
    public function speedSensor(): string
    {
        if ($this->speed < 30) 
        {
            return "too slow";
        }
        elseif ($this->speed <= 60) 
        {
            return "is adequate";
        }
        elseif ($this->speed <= 80)
        {
            return "is fast";
        }
        elseif ($this->speed <=100)
        {
            return "is too fast";
        }
        else 
        {
            return "way too fast";
        }
    }




    
}