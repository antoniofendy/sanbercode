<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
        $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
        echo "<b>Kids</b>    =>  ";
        var_dump($kids);
        echo "<br>";
        echo "<b>Adults</b>  =>  ";
        var_dump($adults);
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: ". count($kids); // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        foreach ($kids as $key) {
            echo "<li> $key </li>";
        }
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: " . count($adults);
        echo "<br>";
        echo "<ol>";
        foreach ($adults as $key) {
            echo "<li> $key </li>";
        }
        // Lanjutkan

        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */

        $persons = [
            [
                "name" => "Will Byers",
                "age" => 12,
                "aliases" => "Will the Wise",
                "status" => "Alive"
            ],
            [
                "name" => "Mike Wheeler",
                "age" => 12,
                "aliases" => "Dungeon Master",
                "status" => "Alive"
            ],
            [
                "name" => "Jim Hopper",
                "age" => 43,
                "aliases" => "Chief Hopper",
                "status" => "Deceased"
            ],
            [
                "name" => "Eleven",
                "age" => 12,
                "aliases" => "El",
                "status" => "Alive"
            ]
        ];

        echo "<h3> Soal Nomor 3 </h3>";

        foreach ($persons as $key) {
            echo "<ul>";
                echo "<li> Name    : $key[name] </li>";
                echo "<li> Age     : $key[age] </li>";
                echo "<li> aliases : $key[aliases] </li>";
                echo "<li> status  : $key[status] </li>";
            echo "</ul>";
        }
        
        echo "<pre>";
        print_r($persons);
        echo "</pre>";

        //ucfirst, lcfirst, ucwords = Uppercase, Lower Case, Uppercase 
        //ref : http://blogsecond.com/2014/08/fungsi-dari-ucfirst-lcfirst-dan-ucwords-di-php/ 
        
        foreach ($persons as $keys => $value) {
            foreach ($value as $key => $vals) {
                echo ucfirst($key). ": $vals<br>";
            }
            echo "<br>";
        }

        // echo "<br>";
        // $number = 10;
        // $myFunction = array_map(function($value) use ($number) {
        //     $res = $value * $number;
        //     echo "$res ";
        // }, [1,2,3,4]);

        // echo "<br>";
        // $numbers = 10;
        // $arr = [1,2,3,4];
        // $myFun = array_map(fn($value) => $value * $numbers, $arr);

    ?>
</body>
</html>