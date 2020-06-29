<?php
function tukar_besar_kecil($string){

    $result = "";

    $words = str_split($string);

    foreach ($words as $word) {
        if(is_numeric($word)){
            $result .= $word;
        }
        else{
            if(ctype_lower($word)){
                $result .= strtoupper($word);
            }
            else{
                $result .= strtolower($word);
            }
        }
    }

    $result .= "<br>";

    return $result;

}

// TEST CASES
echo "Hello World &emsp;&emsp;&emsp;: " . tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "I aM aLAY &emsp;&emsp;&emsp;&thinsp;  : " . tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "My Name is Bond!! : " . tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "IT sHOULD bE me : " . tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "001-A-3-5TrdYW &nbsp;&thinsp;&thinsp;: " . tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>