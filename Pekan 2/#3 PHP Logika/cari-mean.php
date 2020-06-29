<?php

function cari_mean($arr){
    
    $jml_data = array_sum($arr);

    return (round($jml_data/count($arr)));

}

// TEST CASE 
echo "Hasil mean dari [1, 2, 3, 4, 5] : ". cari_mean([1, 2, 3, 4, 5]) . "<br>"; // 3
echo "Hasil mean dari [3, 5, 7, 5, 3] : ". cari_mean([3, 5, 7, 5, 3]) . "<br>"; // 5
echo "Hasil mean dari [6, 5, 4, 7, 3] : ". cari_mean([6, 5, 4, 7, 3]) . "<br>"; // 5
echo "Hasil mean dari [1, 3, 3] &emsp;&emsp;: ". cari_mean([1, 3, 3]) . "<br>"; // 2
echo "Hasil mean dari [7, 7, 7, 7, 7] : ". cari_mean([7, 7, 7, 7, 7]) . "<br>"; // 7

?>