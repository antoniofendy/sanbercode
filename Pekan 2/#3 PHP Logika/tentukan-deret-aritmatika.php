<?php
function tentukan_deret_aritmatika($arr) {

    $gap = $arr[1] - $arr[0];

    for($i = 1; $i < count($arr)-1; $i++){

        if(($arr[$i+1] - $arr[$i]) != $gap){
            return "false <br>";
        }

    }
    return "true <br>";
}

// TEST CASES
echo "[1, 2, 3, 4, 5, 6] : " . tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "[2, 4, 6, 12, 24] : " . tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "[2, 4, 6, 8] &emsp;&emsp;: " . tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "[2, 6, 18, 54] &emsp;: " . tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "[1, 2, 3, 4, 7, 9] : " . tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>