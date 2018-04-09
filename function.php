<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 09/04/2018
 * Time: 16:45
 */

$rayon = 10;

function calculerAire ($rayon){
    if ($rayon >= 0) {
        $AireSphere = 4 * 3.14 * $rayon * $rayon;
        return $AireSphere;
    }

    else{
        return false;
    }
}

function calculerVolume ($AireSphere){
    $VolumeSphere = $AireSphere / 3;

    return $VolumeSphere;
}

echo $AireSphere;
echo $VolumeSphere;