<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	<?php
	require_once 'baglan.php';
	
	if(isset($_POST['ekle']))
	{
		$kaydet=$db->prepare("INSERT into form set
		bilgi_ad=:bilgi_ad,
		bilgi_mail=:bilgi_mail,
		bilgi_yorum=:bilgi_yorum");
		
		$insert=$kaydet->execute(array(
		'bilgi_ad' =>$_POST['bilgi_ad'],
		'bilgi_mail' =>$_POST['bilgi_mail'],
		'bilgi_yorum' =>$_POST['bilgi_yorum']
		));
		
		if ($insert){
			
			echo "kayıt başarılı";
			
			Header("Location:index.php?durum=ok");
			exit;
		}
		else{
			
			echo "kayıt başarısız";
			
			Header("Location:index.php?durum=no");
			exit;
		}
	}
	?>
</body>
</html>