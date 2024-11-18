<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	<?php
	try
	{
		$db=new PDO("mysql:host=localhost;dbname=blog;charset=utf8",'root','');
		//echo "Veritabanı bağlantısı başarılı";
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	?>
</body>
</html>