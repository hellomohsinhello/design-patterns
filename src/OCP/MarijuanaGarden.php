<?php

namespace Src\OCP;

use Src\SRP\EmptyGarden;

class MarijuanaGarden extends EmptyGarden{
    public function items(): array
    {
        $noOfPlots = $this->area->noOfPlots();

        return array_fill(0, $noOfPlots,'Marijuana');
    }
}
