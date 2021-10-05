<?php
namespace Bridge;

class GreenCircle implements DrawAPIInterface
{
    public function drawCircle(int $radius, int $x, int $y)
    {
        echo "Drawing Circle [color: green, radius: " . $radius . ", x:+" . $x . "y" . "】\n";
    }
}