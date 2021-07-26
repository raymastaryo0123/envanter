<?php
require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {


   $kaydet=$db->prepare("INSERT into urun set
		urun_Adi=:urun_Adi,
		urun_Kodu=:urun_Kodu,
		urun_Zaman=:urun_Zaman
		");

   $insert=$kaydet->execute(array(

		'urun_Adi' => $_POST['urun_Adi'],
		'urun_Kodu' => $_POST['urun_Kodu'],
	    'urun_Zaman' => $_POST['urun_Zaman']
	));

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:index1.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index1.php?");
		exit;
	}
}

if (isset($_POST['updateislemi'])) {
	
	$urun_id=$_POST['urun_id'];

	$kaydet=$db->prepare("UPDATE urun set
		urun_Adi=:urun_Adi,
		urun_Kodu=:urun_Kodu,
		urun_Zaman=:urun_Zaman
		where urun_id={$_POST['urun_id']}
		");

	$insert=$kaydet->execute(array(

		'urun_Adi' => $_POST['urun_Adi'],
		'urun_Kodu' => $_POST['urun_Kodu'],
	    'urun_Zaman' => $_POST['urun_Zaman']
	));
		if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:duzenle1.php?urun_id=$urun_id");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:duzenle1.php?urun_id=$urun_id");
		exit;
	}

}

if ($_GET['urunsil']=="ok") {
	

	$sil=$db->prepare("DELETE from urun where urun_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['urun_id']
	));
	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:index1.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index1.php?");
		exit;
	}
}




?>