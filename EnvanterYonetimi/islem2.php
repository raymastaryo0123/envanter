<?php
require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {


   $kaydet=$db->prepare("INSERT into teslim set
   		teslim_EdilenUrun=:teslim_EdilenUrun,
		teslim_EdilenUrunKodu=:teslim_EdilenUrunKodu,
		teslim_AlanAdi=:teslim_AlanAdi,
		teslim_AlanTeli=:teslim_AlanTeli,
		teslim_AlmaNedeni=:teslim_AlmaNedeni,
		teslim_Zamani=:teslim_Zamani,
		teslim_EtmeZamani=:teslim_EtmeZamani,
		teslim_Durumu=:teslim_Durumu
		");

   $insert=$kaydet->execute(array(
		'teslim_EdilenUrun' => $_POST['teslim_EdilenUrun'],
		'teslim_EdilenUrunKodu' => $_POST['teslim_EdilenUrunKodu'],
		'teslim_AlanAdi' => $_POST['teslim_AlanAdi'],
		'teslim_AlanTeli' => $_POST['teslim_AlanTeli'],
		'teslim_AlmaNedeni' => $_POST['teslim_AlmaNedeni'],
		'teslim_Zamani' => $_POST['teslim_Zamani'],
		'teslim_EtmeZamani' => $_POST['teslim_EtmeZamani'],
		'teslim_Durumu' => $_POST['teslim_Durumu']
	));

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:index2.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index2.php?");
		exit;
	}
}

if (isset($_POST['updateislemi'])) {
	
	$teslim_id=$_POST['teslim_id'];

	$kaydet=$db->prepare("UPDATE teslim set
		teslim_EdilenUrun=:teslim_EdilenUrun,
		teslim_EdilenUrunKodu=:teslim_EdilenUrunKodu,
		teslim_AlanAdi=:teslim_AlanAdi,
		teslim_AlanTeli=:teslim_AlanTeli,
		teslim_AlmaNedeni=:teslim_AlmaNedeni,
		teslim_Zamani=:teslim_Zamani,
		teslim_EtmeZamani=:teslim_EtmeZamani,
		teslim_Durumu=:teslim_Durumu
		where teslim_id={$_POST['teslim_id']}
		");

	$insert=$kaydet->execute(array(
		'teslim_EdilenUrun' => $_POST['teslim_EdilenUrun'],
		'teslim_EdilenUrunKodu' => $_POST['teslim_EdilenUrunKodu'],
		'teslim_AlanAdi' => $_POST['teslim_AlanAdi'],
		'teslim_AlanTeli' => $_POST['teslim_AlanTeli'],
		'teslim_AlmaNedeni' => $_POST['teslim_AlmaNedeni'],
		'teslim_Zamani' => $_POST['teslim_Zamani'],
		'teslim_EtmeZamani' => $_POST['teslim_EtmeZamani'],
		'teslim_Durumu' => $_POST['teslim_Durumu']
	));
		if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:duzenle2.php?teslim_id=$teslim_id");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:duzenle2.php?teslim_id=$teslim_id");
		exit;
	}

}

if ($_GET['teslimsil']=="ok") {
	

	$sil=$db->prepare("DELETE from teslim where teslim_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['teslim_id']
	));
	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:index2.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header(" Location:index2.php?");
		exit;
	}
}




?>