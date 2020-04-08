<?php


class Fan
{
    const SLOW=1;
    const MEDIUM=2;
    const FAST=3;

    private $speed=self::SLOW;
    private $on=false;
    private $radius=5.0;
    private $color="blue";


    public function __construct()
    {

    }

    public function setSpeedFast()
    {
        return $this->speed= self::FAST;
    }

    public function setSpeedMedium()
    {
        return $this->speed= self::MEDIUM;
    }

    public function setSpeedSlow()
    {
        return $this->speed= self::SLOW;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function toString(){
        if ($this->on){
            echo "fan is off ";
            return $this->getColor()." ".$this->getRadius();
        }else{
            echo "fan is on ";
            return $this->getSpeed()." ".$this->getColor()." ".$this->getRadius();
        }
    }

}

?>
