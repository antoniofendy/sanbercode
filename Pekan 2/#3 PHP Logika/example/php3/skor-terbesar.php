<?php

//Dummy data
$skor = [
    ['nama'=>'A', 'kelas'=>'Laravel', 'nilai'=>90],
    ['nama'=>'B', 'kelas'=>'React Native', 'nilai'=>80],
    ['nama'=>'C', 'kelas'=>'React JS', 'nilai'=>70],
    ['nama'=>'D', 'kelas'=>'React Native', 'nilai'=>100],
    ['nama'=>'E', 'kelas'=>'Laravel', 'nilai'=>50],
    ['nama'=>'F', 'kelas'=>'React Native', 'nilai'=>90],
    ['nama'=>'G', 'kelas'=>'Laravel', 'nilai'=>60],
    ['nama'=>'H', 'kelas'=>'React JS', 'nilai'=>80],
    ['nama'=>'I', 'kelas'=>'React Native', 'nilai'=>100],
    ['nama'=>'J', 'kelas'=>'Laravel', 'nilai'=>70],
    ['nama'=>'K', 'kelas'=>'React JS', 'nilai'=>60],
];

function skor_terbesar($arr){
//kode di sini
    echo '<pre>';
    $arr_result = [];
    foreach ($arr as $row) {
        # code...
        if(array_key_exists($row['kelas'], $arr_result)){
            if($row['nilai']> $arr_result[$row['kelas']]['nilai']){
                $arr_result[$row['kelas']] = $row;
            }
        }else{
            $arr_result[$row['kelas']] = $row;
        }
    }

    print_r($arr_result);
    echo '<pre>';
}

// TEST CASES
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