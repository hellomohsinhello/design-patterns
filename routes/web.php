<?php

use Illuminate\Support\Facades\Route;
use Src\OCP\MarijuanaGarden;
use Src\SRP\EmptyGarden;


// Single Responsibility.
//$obj = new EmptyGarden(2,2);
//
//dd($obj->items());


//Open Closed Principal
$object = new MarijuanaGarden(3,5);

dd($object->items());
