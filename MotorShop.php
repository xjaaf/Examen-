<?php
require_once 'MotorCycle.php';

class MotorShop
{
    public $inventory = [];


    public function addMotorCycle(MotorCycle $motor)
    {
        $this->inventory[] = $motor;
    }

    public function getType($type)
    {
        $motors = [];
        foreach ($this->inventory as $motor) {
            if (strtolower($motor->getType()) === strtolower($type)) {
                $motors[] = $motor;
            }
        }
        return $motors;
    }

    public function getMaxCCMotor()
    {
        $maxDisplacement = 0;
        $maxDisplacementMotor = [];

        foreach ($this->inventory as $motor) {
            if ($motor->getDisplacement() > $maxDisplacement) {
                $maxDisplacement = $motor->getDisplacement();
                $maxDisplacementMotor = $motor;
            }
        }

        return $maxDisplacementMotor;
    }

    public function __toString()
    {
        $output = "<h3>Availables Motors </h3>";
        foreach ($this->inventory as $motor) {
            $output .= $motor . "<br>";
        }
        return $output;
    }
}
