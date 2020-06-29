<?php
function ubah_huruf($string){

    $alphabet = [
        "a", "b", "c", "d", "e", "f", 
        "g", "h", "i", "j", "k", "l", 
        "m", "n", "o", "p", "q", "r",
        "s", "t", "u", "v", "w", "x",
        "y", "z"
    ];

    $word = str_split(strtolower($string));

    for($i = 0; $i < count($word); $i++){

        $key = array_search($word[$i], $alphabet);
        //jika key lebih dari 26, kembali ke a
        if($key > 26){
            $key = 0;
        }
        else{
            $word[$i] = $alphabet[$key+1];
        }
    }

    return implode("", $word) . "<br>";

}

// TEST CASES
echo 'wow &emsp;&emsp;: ' . ubah_huruf('wow'); // xpx
echo 'developer : '  . ubah_huruf('developer'); // efwfmpqfs
echo 'laravel &emsp;&thinsp;: ' . ubah_huruf('laravel'); // mbsbwfm
echo 'keren &emsp;&ensp;&thinsp;: ' . ubah_huruf('keren'); // lfsfo
echo 'semangat &thinsp;: ' . ubah_huruf('semangat'); // tfnbohbu

?>