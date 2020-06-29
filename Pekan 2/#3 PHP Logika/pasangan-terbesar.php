<?php
function pasangan_terbesar($angka){

    $str = strval($angka);
    $length = strlen($str);

    $arr = [];

    //Memasukan setiap elemen dalam array
    for($i = 0; $i < ($length-1); $i++){

        array_push($arr, intval($str[$i] . $str[$i+1]));

    }

    //Mengecek elemen terbesar
    $max = 0;
    for($i = 0; $i < count($arr); $i++){
        if($max < $arr[$i]){
            $max = $arr[$i];
        }
    }

    return $max;

}

// TEST CASES
echo "641573 &emsp;: " . pasangan_terbesar(641573) . "<br><br>"; // 73
echo "12783456 : " . pasangan_terbesar(12783456) . "<br><br>"; // 83
echo "910233 &emsp;: " . pasangan_terbesar(910233) . "<br><br>"; // 91
echo "71856421 : " . pasangan_terbesar(71856421) . "<br><br>"; // 85
echo "79918293 : " . pasangan_terbesar(79918293) . "<br><br>"; // 99

?>