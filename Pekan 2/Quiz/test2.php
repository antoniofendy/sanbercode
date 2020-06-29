<?php
/**
 * CONTOH:
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'),
 *    array('India', 'perak'),
 *    array('Korea Selatan', 'emas' ),
 *    array('India', 'perak'),
 *    array('India', 'emas'),
 *    array('Indonesia', 'perak'),
 *    array('Indonesia', 'emas'),
 *  )
 * );
 *
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 *
 *
 */
//==========================
//       ALGORITMA
//==========================
// 1. Mengecek apakah parameter yang dikirimkan kosong atau tidak
// 2. Bila kosong, maka di return value "No data"
// 3. Bila ada, maka dilakukan langkah dibawah
// 4. membuat assosiatif array untuk menampung value bernama '$list'
// 5. membuat array sementara untuk menampung list negara yang masuk ke array bernama '$negara'
// 6. Lakukan foreach untuk melihat value dari '$arr' satu per satu
// 7. setiap satu value nya akan dicek apakah nama negaranya sudah terdaftar di '$negara'
// 8. Bila belum terdaftar maka akan mengepush nama negara tsb ke dalam array '$negara, lanjut proses 10
// 9. Bila sudah maka dilakukan proses 10
// 10. Melakukan pengkodisian untuk mengecek negara yang dimaksud.
// apabila negara bernilai 'Indonesia' maka akan diassign ke 'list[0][$value[1]]'
// '$value[1]' merupakan indeks untuk jenis penghargaan yang didapat "emas,perak,perunggu".
// bila diketemukan jenis penghargaannya dalam array assosiatif, maka nilai dari index tersebut kita increment 1;
// PROSES 7-10 akan berulang kali terjadi hingga seluruh isi dari '$arr' sudah diakses.


$array = [

  ['indonesia', 'emas'],
  ['India', 'perak'],
  ['Korea Selatan', 'emas'],
  ['India', 'perak'],
  ['India', 'emas'],
  ['Indonesia', 'perak'],
  ['Indonesia', 'emas']

];
 
function perolehan_medali($arr){
  $list = [];
  $negara = [];

  foreach ($arr as $value) {
    if(!in_array($value[0], $negara)){
      array_push($negara, $value[0]);
      array_push($list, ["negara"=>$value[1], "emas"=>0,"perak"=>0, "perunggu"=>0]);
    }
    $list[array_search($value[0], $negara)][$value[1]] += 1;
  }

  return $list;

}
 
 // TEST CASES
echo "<pre>";

 print_r (perolehan_medali(
   array(
    array('Indonesia', 'emas'),
    array('India', 'perak'),
    array('Korea Selatan', 'emas' ),
    array('India', 'perak'),
    array('India', 'emas'),
    array('Indonesia', 'perak'),
    array('Indonesia', 'emas')
   )
  ));

echo "</pre>";

/**
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 */
 
 print_r(perolehan_medali([])); // no data
?>