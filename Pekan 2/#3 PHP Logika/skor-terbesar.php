<?php
function skor_terbesar($arr){

    $resultArray = [];

    echo "<pre>";

    foreach ($arr as $data) {
        
        //untuk mencari tahu, apakah sudah ada kelas yang sama untuk dibandingkan nantinya
        if(array_key_exists($data['kelas'], $resultArray)){
            if($data['nilai'] > $resultArray[$data['kelas']]['nilai']){
                $resultArray[$data['kelas']] = $data;
            }
        }
        else{
            $resultArray[$data['kelas']] = $data;
        }

    }

    print_r($resultArray);

    echo "</pre>";

}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
    ];

print_r(skor_terbesar($skor));
/* OUTPUT
    Array (
        [Laravel] => Array
                (
                    [nama] => Aghnat
                    [kelas] => Laravel
                    [nilai] => 90
                )
        [React Native] => Array
                    (
                        [nama] => Regi
                        [kelas] => React Native
                        [nilai] => 86
                    )
        [React JS] => Array
                    (
                    [nama] => Indra
                    [kelas] => React JS
                    [nilai] => 85
                    )
    )
*/
?>