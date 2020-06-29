<?php
function tentukan_deret_geometri($arr) {

    $gap = $arr[1] / $arr[0];

    for($i = 1; $i < count($arr)-1; $i++){

        if(($arr[$i+1] / $arr[$i]) != $gap){
            return "false <br>";
        }

    }
    return "true <br>";

}
//TEST CASES
echo "[1, 3, 9, 27, 81] : " . tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo "[2, 4, 8, 16, 32] : " . tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "[2, 4, 6, 8] &emsp;&emsp;: " . tentukan_deret_geometri([2, 4, 6, 8]); // false
echo "[2, 6, 18, 54] &emsp;: " . tentukan_deret_geometri([2, 6, 18, 54]); // true
echo "[1, 2, 3, 4, 7, 9] : " . tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>