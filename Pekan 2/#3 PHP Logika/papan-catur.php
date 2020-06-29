<?php

function papan_catur($angka) {

    $str = "";

    for($i = 1; $i <= $angka; $i++){
        for($j = 1; $j <= ($angka + $angka-1); $j++){

            if($i % 2 == 0){

                if($j % 2 == 0){
                    $str .= "#";
                }
                else{
                    $str .= "&nbsp;";
                }

            }
            else{

                if($j % 2 == 0){
                    $str .= "&nbsp;";
                }
                else{
                    $str .= "#";
                }

            }


        }
        $str .= "<br>";
    }
    $str .= "<br>";
    return $str;

}


// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/