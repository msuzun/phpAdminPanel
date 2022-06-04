<?php

	require 'baglan.php';
	if (isset($_POST['ayar_kaydet'])) {
		$sorgu=$db->prepare("UPDATE ayarlar SET 

			site_baslik=:site_baslik,
			site_aciklama=:site_aciklama,
			site_link=:site_link,
			site_sahibi_mail=:site_sahibi_mail,
			site_mail_host_adresi=:site_mail_host_adresi,
			site_mail_adresi=:site_mail_adresi,
			mail_port_numarasi=:mail_port_numarasi,
			mail_sifresi=:mail_sifresi WHERE id=1
		");

		$sonuc=$sorgu->execute(array(

			'site_baslik' => $_POST['site_baslik'],
			'site_aciklama' => $_POST['site_aciklama'],
			'site_link' => $_POST['site_link'],
			'site_sahibi_mail' => $_POST['site_sahibi_mail'],
			'site_mail_host_adresi' => $_POST['site_mail_host_adresi'],
			'site_mail_adresi' => $_POST['site_mail_adresi'],
			'mail_port_numarasi' => $_POST['mail_port_numarasi'],
			'mail_sifresi' => $_POST['mail_sifresi'],
		));

		if ($sonuc) {
			header("location:../ayarlar.php?durum=ok");
		}
		else{
			header("location:../ayarlar.php?durum=no");
		}
	}

 ?>