<?php
/**
 * Created by PhpStorm.
 * User: ShaneBarker
 * Date: 12/12/2015
 * Time: 10:53
 */
// Quick way to fill the array for the drop down list by using a do while loop..

$rouletteSpin = new rouletteSpin();

// We created the below as function calls but the functions do basically the same thing...
// They use a do while loop to create an array of numbers to go to a drop down list. The only difference is the increment value
// and the end value. For this reason, we could create a dynamic function that takes the start, end and increment values as params
// and use that to generate the drop downs and save some code :)

$numbers = $rouletteSpin->getNumberDropDown();
$stakes = $rouletteSpin->getStakeDropDown();

// So instead, lets call our nice new dynamic function - notice the results are identical. We could delete the above 2 function
// calls and the functions themselves but I have left them in for demonstration purposes :)
$numbers = $rouletteSpin->getDropDown(0, 1, 37);
$stakes = $rouletteSpin->getDropDown(5, 5 ,101);

class rouletteSpin{

    /**
     * @return array
     */
    public function getNumberDropDown()
    {
        $numbers = [];
        $counter = 0;
        do {
            $numbers[] = $counter;
            $counter++;
        } while ($counter < 37);

        return $numbers;
    }

    /**
     * @return array
     */
    public function getStakeDropDown()
    {
        $stakes = [];
        $counter = 0;

        do {
            $stakes[] = $counter;
            $counter =$counter + 5;
        } while ($counter < 101);

        return $stakes;
    }

    // Here's our nice new dynamic function :D
    /**
     * @param $start
     * @param $increment
     * @param $end
     * @return array
     */
    public function getDropDown($start, $increment, $end)
    {
        $values = [];
        $counter = $start;

        do {
            $values[] = $counter;
            $counter = $counter + $increment;
        } while ($counter < $end);

        return $values;
    }
}