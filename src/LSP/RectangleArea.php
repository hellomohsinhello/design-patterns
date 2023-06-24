<?php

namespace Src\LSP;

class RectangleArea implements PlotArea
{

    protected int $width;
    protected int $height;
    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function noOfPlots(): int
    {
        return ceil($this->width * $this->height);
    }
}
