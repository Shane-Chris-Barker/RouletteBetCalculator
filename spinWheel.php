<?php
/**
 * Created by PhpStorm.
 * User: ShaneBarker
 * Date: 12/12/2015
 * Time: 10:53
 */
    // Quick way to fill the array for the drop down list by using a do while loop..

$rouletteSpin = new rouletteSpin();
$numbers  = $rouletteSpin->getDropDownValues();

class rouletteSpin{

    public function getDropDownValues()
    {
        $numbers = [];
        $counter = 0;
        do {
            $numbers[] = $counter;
            $counter++;
        } while ($counter < 37);

        return $numbers;
    }


}