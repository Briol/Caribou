<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 09/04/2018
 * Time: 14:56
 */

echo "<h1>the Caribou Project</h1>";

$message = "<ul>";

for ($i = -17827 ; $i <=14568 ; $i += 7) {
    if($i % 24 == 0) {
        $message .= "<li>";
        $message .= $i;
        $message .= "</li>";
    }
}

$message = "<ul>";

echo $message;