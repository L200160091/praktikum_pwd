<html>
	<head><title>WOW</title></head>
	<body>
	<form method = 'POST' action = 'tugas.php' name = 'from'>
	Nilai A adalah <input style = 'text' name = 'nilai1'></br>
	Nilai B adalah <input style = 'text' name = 'nilai2'>
	</br>
	<input type='submit' name = 'jumlah' value ='jumlahkan'>
	</form>
	<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	$nilai1 = $_POST['nilai1'];
	$nilai2 = $_POST['nilai2'];
	$submit = $_POST['jumlah'];
	$jumlah = $nilai1 + $nilai2;
	if($submit){
		echo "</br>Nilai A adalah $nilai1";
		echo "</br>Nilai B adalah $nilai2";
		echo "</br>jadi nilai A ditambah nilai B adalah $jumlah";

	}

	?>
</body>

</html>