<?php

namespace Src\SRP;

use Src\LSP\PlotArea;

class EmptyGarden
{

    protected PlotArea $area;

    public function __construct(PlotArea $area)
    {
        $this->area = $area;
    }

    public function items(): array
    {
        $numberOfSpots = $this->area->noOfPlots();

        return array_fill(0, $numberOfSpots, "handful of dirt.");
    }

}
