<?php 
// PHP Function
    // function tampilkan_nama(){

    //     echo "nama saya malas ngoding";
    // }

    // tampilkan_nama(); 

// String Function
    // $nama = "muhammad raden iqbal hafidz Fauzi";
    // echo $nama;
    // echo '<br>';
    // echo strtoupper($nama);
    // echo '<br>';
    // echo ucwords($nama);
    // echo '<br>';
    // echo lcfirst($nama);
    // echo '<br>';
    // echo strtolower($nama); 

// Function define By User :: void

    // function salam($nama){
    //     echo "<h2>Assalamu'alaikum".strtoupper($nama)."</h2>";
    // }

    // salam("ali");
    // salam("fadil");
    // salam("Semua");

// Function define By User :: return value

    // function jumlah($a , $b){
    //     return $a + $b;
    // }

    // echo '$a + $b = ' .jumlah(2,8);

    // membuat fungsi

    // function perkenalan(){
    //     echo "assalamualaikum,";
    //     echo "perkenalkan, nama saya bedu<br/>";
    //     echo "senang berkenalan dengan anda<br/>";
    // }

    // // memanggail fungsi yang sudah dibuat
    // perkenalan();

    // echo "<hr/>";
    // // memanggil lagi
    // perkenalan();

    // membuat fungsi
    // function perkenalan($nama, $salam){
    //     echo $salam. ",";
    //     echo " perkenalan, nama saya ".$nama."<br>";
    //     echo "senang berkenalan dengan anda<br>";
    // }

    // // memanggil fungsi yang sudah di buat

    // perkenalan("usro", "hai");

    // echo "<hr>";

    // $saya = "bedu";
    // $ucapansalam = "selamat pagi";

    // // memanggilnya lagi
    // perkenalan($saya, $ucapansalam);

    // membuat fungsi

    // function perkenalan($nama, $salam="assalamualaikum"){
    //     echo $salam.", ";
    //     echo "perkenalan, nama saya".$nama."<br>";
    //     echo "senang berkenalan dengan anda<br>";
    // }

    // // memanggil fungsi yang sudah dibuat
    // perkenalan("jarwo", "hi");
    // echo "<hr>";

    // $saya = "bambang";
    // $ucapansalam = "selamat pagi";
    // //memanggilnya lagi tanpa mengisi parameter salam
    // perkenalan($saya); 

    // function hitungumur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }
    // echo "umur saya adalah". hitungumur (2005, 2025). " tahun";

    // function hitungumur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }

    // function perkenalan($nama, $salam="assalamualaikum"){
    //     echo $salam.", ";
    //     echo "perkenalan, nama saya ".$nama."<br>";

    //     echo "saya berusia". hitungumur(1994, 2015) ."tahun<br>";
    //     echo "senang berkenalan dengan anda<br>";
    // }

    // perkenalan("ardianta");

    // function faktorial($angka){
    //     if($angka < 2){
    //         return 1;
    //     } else {

    //         return ($angka * faktorial($angka-1));
    //     }
    // }

    // echo "faktorial 5 adalah" .faktorial(5);

    // function pangkatdua($a){
    //     $a = $a * $a;
    // }
    // $a = 20;
    // echo 'sebelum nilai $a :' .$a;
    // pangkatdua($a);
    // echo '<br>sesudah nilai $a :' .$a;


    function pangkatdua(){
        global $a;
        $a = $a * $a;
    }
    $a = 20;
    echo 'sebelum nilai $a:'.$a;
    pangkatdua($a);
    echo '<br>sesudah nilai $a:'.$a;

?> 