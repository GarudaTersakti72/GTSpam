<?php
include '2.php';

//MADE BY YUKKI666
//https://github.com/mryukk11
//GARUDA TERSAKTI 72

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

