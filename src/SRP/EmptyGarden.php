<?php

namespace Src\SRP;

class EmptyGarden
{

    protected int $height;
    protected int $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function items()
    {
        $numberOfSpots = ceil($this->width *$this->height);

        return array_fill(0, $numberOfSpots, "handful of dirt.");
    }

}
