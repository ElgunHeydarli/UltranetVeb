<?php

try {
	$baglanti=new PDO('mysql:host=localhost; dbname=e71778_internet; charset=utf8',  'e71778_adiinternet' , 'Wnlm4lzvLy=#');
	#echo "bağlantı başarılı";
} catch (Exception $e) {
	echo "Hata yaptın :".$e->getMessage();

}


?>