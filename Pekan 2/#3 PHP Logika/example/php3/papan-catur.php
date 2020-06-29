<?php

function papan_catur($angka) {
// tulis kode di sini
    echo "<pre>Papan catur $angka x $angka <br>";
    for ($i=0; $i <$angka ; $i++) { 
        # code...
        $row = '';
        if ($i % 2 == 0) {
            # code...
            for ($j=0; $j < $angka; $j++) { 
                # code...
                $row .= '# ';
            }
        } else {
            # code...
            for ($j=0; $j < $angka-1; $j++) { 
                # code...
                $row .= " #";
            }
        }
        echo "$row <br>";
        
    }
    echo '<br><pre>';
}

// TEST CASES
echo papan_catur(4) ;
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

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/