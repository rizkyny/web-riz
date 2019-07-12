<?php 

function perkenalan($nama, $salam="Selamat Datang. "){
	echo "$salam ";
	echo "Perkenalkan, nama saya ".$nama.".<br>";
	echo "Saya berusia ".hitungumur(2001, 2019). " tahun.<br>";
	echo "Senang berkenalan dengan Anda. <br>";
}

function hitungumur($lahir, $now){
	$umur = $now - $lahir;
	return $umur;
}	

function faktorial($angka){
	if ($angka < 2) {
		return 1;
	} else {
		return($angka* faktorial($angka-1));
	}
}

function luas(){
	$p=10;
	$l=6.5;
	$luas=$p*$l;
	return $luas;
}

function luasL(){
	$d=10;
	$r=$d/2;
	$phi=3.14;
	$luasL=($phi*($r*$r))/2;
	return $luasL;
}

function do_print(){
	echo time();
}

do_print();
echo "<br>";

function jumlah($a,$b){
	return($a+$b);
}

// echo jumlah(2,3);

// echo perkenalan("Komang");
// echo "Faktorial dari 5 adalah ".faktorial(5);
// echo "Luas Persegi Panjang dengan uk. 10x6,5 adalah ".luas();
// echo "Luas Setengah Lingkarang yang berdiameter 10 cm adalah ".luasL();

?>