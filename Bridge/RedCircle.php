<?php
namespace Bridge;

class RedCircle implements DrawAPIInterface
{
    public function drawCircle(int $radius, int $x, int $y)
    {
        echo "Drawing Circle [color: red, radius: " . $radius . ", x:+" . $x . "y" . "】\n";
    }
}