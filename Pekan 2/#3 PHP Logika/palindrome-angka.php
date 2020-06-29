<?php

function cekPalindrome($num){
    
    $stringNumber = strval($num);
    $ReversedString = strrev($stringNumber);

    if($stringNumber == $ReversedString){
        return true;
    }
    return false;

}

function palindrome_angka($angka) {

    if($angka < 0){
        return "Tidak bisa mencari Palindrome <br>";
    }
    else{

        if($angka < 9){
            return "Palindrome angka {$angka} => " . ($angka+1) . "<br>";
        }
        else{
            $temp = $angka;
            while(true){
                $temp +=1;
                if(cekPalindrome($temp) == true){
                    return "Palindrome angka {$angka} => " . ($temp) . "<br>";
                }
                else{
                    continue;
                }
            }
        }

    }

}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001// 

?>