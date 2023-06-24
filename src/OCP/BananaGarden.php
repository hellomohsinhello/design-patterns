<?php

namespace Src\OCP;

use Src\SRP\EmptyGarden;

class BananaGarden extends EmptyGarden
{
    public function items()
    {
        $noOfSpots = ceil($this->width * $this->height);

        return array_fill(0, $noOfSpots, ' banana');
    }
}
