<?php

    require('animal.php');
    require('frog.php');
    require('ape.php');

    echo "<hr>";
    echo "<b>Kelas Animal</b> <br>";
    $sheep = new Animal("shaun");
    echo "Nama &emsp;&emsp;&emsp;: " . $sheep->getName() . "<br>";
    echo "Kaki &emsp;&emsp;&emsp;&nbsp;&nbsp;: " .  $sheep->getLegs() . "<br>";
    echo "Darah Dingin : " . $sheep->getColdBlooded() . "<br>";

    echo "<hr>";
    echo "<b>Kelas Ape</b><br>";
    $sungokong = new Ape("kera sakti");
    echo "Nama &emsp;&emsp;&emsp;: " . $sungokong->getName() . "<br>";
    echo "Kaki &emsp;&emsp;&emsp;&nbsp;&nbsp;: " .  $sungokong->getLegs() . "<br>";
    echo "Darah Dingin : " . $sungokong->getColdBlooded() . "<br>";
    echo "Method yell() : " ;
    echo $sungokong->yell() . "<br>";

    echo "<hr>";
    $kodok = new Frog("buduk");
    echo "<b>Kelas Frog</b> <br>";
    echo "Nama &emsp;&emsp;&emsp;: " . $kodok->getName() . "<br>";
    echo "Kaki &emsp;&emsp;&emsp;&nbsp;&nbsp;: " .  $kodok->getLegs() . "<br>";
    echo "Darah Dingin : " . $kodok->getColdBlooded() . "<br>";
    echo "Method jump : " ;
    echo $kodok->jump() . "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<pre>";

    print_r($sheep);
    print_r($sungokong);
    print_r($kodok);

    echo "</pre>";

?>
