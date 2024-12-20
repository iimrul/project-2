<?php 
define('FACTOR', 9/5);
define('OFFSET', 32);

$temperature = (float) readline('Enter temperature value: ');
$select = (int) readline('select (1) for Fahrenheit, (2) for Celsius');

switch($select){
    case 1: 
        $ans = $temperature * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit is: $result\n";
        break;
    case 2: 
        $ans = ($temperature - OFFSET)/ FACTOR;
        echo "Temperature in Celsius is: $result\n";
        break;
    default:
        echo "Invalid choice!";
        break;
}
