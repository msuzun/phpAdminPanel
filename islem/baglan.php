<?php
$host="xxx";
$veritabani_isim="xxxx";
$kullanici_adi="xxxx";
$kullanici_sifre="xxxx";

try {
	
	$db = new PDO("mysql:host=$host;dbname=$veritabani_isim;charset=utf8",$kullanici_adi,$kullanici_sifre);
} catch (Exception $e) {
	echo $e->getmessage();
}

$sorgu=$db->prepare("SELECT * FROM ayarlar");
$sorgu->execute();
$ayarcek=$sorgu->fetch(PDO::FETCH_ASSOC);


?>
