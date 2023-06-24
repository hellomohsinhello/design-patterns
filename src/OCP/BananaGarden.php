<?php

namespace Src\OCP;

use Src\SRP\EmptyGarden;

class BananaGarden extends EmptyGarden
{
    public function items() : array
    {
        $noOfSpots = $this->area->noOfPlots();

        return array_fill(0, $noOfSpots, ' banana');
    }
}
