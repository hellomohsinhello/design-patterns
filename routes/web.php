<?php

use Illuminate\Support\Facades\Route;
use Src\LSP\RectangleArea;
use Src\OCP\BananaGarden;
use Src\OCP\MarijuanaGarden;
use Src\SRP\EmptyGarden;


// Single Responsibility.
//$obj = new EmptyGarden(2,2);
//
//dd($obj->items());


//Open Closed Principal
//$object = new MarijuanaGarden(3,5);
//$banana = new BananaGarden(3,2);
//
//dd($banana->items());


//

//Liskov Substitution Principle

$rectangle = new RectangleArea(2,4);

$marijuana = new MarijuanaGarden($rectangle);
$banana = new BananaGarden($rectangle);

dump($marijuana->items());
dump($banana->items());
