<?php

use Illuminate\Support\Facades\Route;
use Src\SRP\EmptyGarden;


// Single Responsibility.
$obj = new EmptyGarden(2,2);

dd($obj->items());
