<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 09/04/2018
 * Time: 14:56
 */

echo "<h1>the Caribou Project</h1>";

include "./Classes/Voiture.php";
include "./function/debug.php";

$voiture1 = new Voiture("jaune", "honda", "900", "155000");


echo $voiture1 -> demarrer();
debug($voiture1);