<?php
//==========================
	//       Algoritma
	//==========================
	// 1. Menerima parameter string lalu mencari operator dengan function strpos
	// 2. Ketika ditemukan string seperti ("+", "-", dsb), maka akan di assign ke variabel '$operator'
	// 3. Memecah string menjadi array menggunakan function explode dengan delimiter dari '$operator'
	// sehingga akan menghasilkan array yang terdiri dari dua index cth '10+2' maka menjadi [10,2]
	// 4. Menggunakan perkondisian switch untuk melakukan perhitungan operasi sesuai dengan nilai dari '$operator'
	// apa bila operator bernilai '+' maka dilakukan operasi 'arr[0] +  arr[1]'

	function hitung($string_data){

		$arr = [];

		$operator = "";

		if(strpos($string_data, "*")){
			$operator = "*";
		}
		else if(strpos($string_data, "/")){
			$operator = "/";
		}
		else if(strpos($string_data, "+")){
			$operator = "+";
		}
		else if(strpos($string_data, "-")){
			$operator = "-";
		}
		else{
			$operator = "%";
		}

		$arr = explode($operator, $string_data);
		
		switch($operator){
			case '+':
				echo $arr[0] + $arr[1];
				break;

			case '-':
				echo $arr[0] - $arr[1];
				break;

			case '/':
				echo $arr[0] / $arr[1];
				break;

			case '*':
				echo $arr[0] * $arr[1];
				break;

			case '%':
				echo $arr[0] % $arr[1];
				break;

		}

	}

	echo hitung("102*2") . "<br>"; //204
	echo hitung("2+3") . "<br>"; //5
	echo hitung("100/25") . "<br>"; //4
	echo hitung("10%2") . "<br>"; //0
	echo hitung("99-2") . "<br>"; //97

?>