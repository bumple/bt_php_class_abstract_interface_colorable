<?php
namespace src;

use JetBrains\PhpStorm\Pure;

class Square extends Rectangle implements Colorable
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function colorable()
    {
        echo "t co colorable()";
        // TODO: Implement colorable() method.
    }
}