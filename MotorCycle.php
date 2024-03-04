<?php
class MotorCycle
{
    private $brand;
    private $displacement;
    private $type;
    private $tag;

    public function __construct($brand, $displacement, $type, $tag)
    {
        $this->brand = $brand;
        $this->displacement = $displacement;
        $this->type = $type;
        $this->tag = $tag;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    public function getDisplacement()
    {
        return $this->displacement;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getTag()
    {
        return $this->tag;
    }

    public function __toString()
    {
        return "Brand: " . $this->brand . "<br>" .
            "Displacement: " . $this->displacement . "<br>" .
            "Type: " . $this->type . "<br>" .
            "Tag: " . $this->tag . "<br>";
    }
}
