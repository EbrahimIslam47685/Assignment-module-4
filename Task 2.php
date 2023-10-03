
<?php

$numbers = range(1, 10);

function removeEvenNumbers(&$array) {
    foreach ($array as $key => $value) {
        if ($value % 2 == 0) {
            unset($array[$key]); 
        }
    }
}

removeEvenNumbers($numbers);
print_r($numbers);

?>