<?php

session_start();


require_once 'baglanti.php';

if (isset($_POST['ayarkaydet'])) {
$kaydet=$baglanti->prepare("UPDATE ayarlar SET 

ayar_baslik=:ayar_baslik,
ayar_aciklama=:ayar_aciklama,
ayar_anahtar=:ayar_anahtar,
ayar_adres=:ayar_adres,
ayar_telefon=:ayar_telefon,
ayar_telefon2=:ayar_telefon2,
ayar_telefon3=:ayar_telefon3,
ayar_telefon4=:ayar_telefon4,
ayar_email=:ayar_email
	");
$update=$kaydet->execute(array(

'ayar_baslik'=>htmlspecialchars($_POST['baslik']),
'ayar_aciklama'=>htmlspecialchars($_POST['aciklama']),
'ayar_anahtar'=>htmlspecialchars($_POST['anahtar']),
'ayar_adres'=>htmlspecialchars($_POST['adres']),
'ayar_telefon'=>htmlspecialchars($_POST['telefon']),
'ayar_telefon2'=>htmlspecialchars($_POST['telefon2']),
'ayar_telefon3'=>htmlspecialchars($_POST['telefon3']),
'ayar_telefon4'=>htmlspecialchars($_POST['telefon4']),
'ayar_email'=>htmlspecialchars($_POST['email'])


));


if ($update) {
Header("Location:ayarlar.php?sayfa=ayarlar&durum=okey");
}else{
	Header("Location:ayarlar.php?sayfa=ayarlar&durum=no");
}

}





if (isset($_POST['sosyalmedyakaydet'])) {
$kaydet=$baglanti->prepare("UPDATE ayarlar SET 

ayar_facebook=:ayar_facebook,
ayar_instagram=:ayar_instagram,
ayar_linkedin=:ayar_linkedin,
ayar_twitter=:ayar_twitter

	");
$update=$kaydet->execute(array(

'ayar_facebook'=>htmlspecialchars($_POST['facebook']),
'ayar_instagram'=>htmlspecialchars($_POST['instagram']),
'ayar_linkedin'=>htmlspecialchars($_POST['linkedin']),
'ayar_twitter'=>htmlspecialchars($_POST['twitter'])

));


if ($update) {
Header("Location:ayarlar.php?sayfa=sosyalmedya&durum=okey");
}else{
	Header("Location:ayarlar.php?sayfa=sosyalmedya&durum=no");
}
}















if (isset($_POST['hakkimizdakaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 

hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama,
hakkimizda_resim=:hakkimizda_resim



	");
$update=$kaydet->execute(array(

'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama'],
'hakkimizda_resim'=>$resimadi

));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/hakkimizda/$eskiresim");
Header("Location:hakkimizda.php?durum=okey");
}else{
	Header("Location:hakkimizda.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 


hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama


	");
$update=$kaydet->execute(array(

'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:hakkimizda.php?durum=okey");
}else{
	Header("Location:hakkimizda.php?durum=no");
}

}


}


















if (isset($_POST['bolkaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE bol SET 

bol_baslik=:bol_baslik,
bol_aciklama=:bol_aciklama,
bol_resim=:bol_resim



	");
$update=$kaydet->execute(array(

'bol_baslik'=>htmlspecialchars($_POST['baslik']),
'bol_aciklama'=>$_POST['aciklama'],
'bol_resim'=>$resimadi

));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/hakkimizda/$eskiresim");
Header("Location:bol.php?durum=okey");
}else{
	Header("Location:bol.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE bol SET 


bol_baslik=:bol_baslik,
bol_aciklama=:bol_aciklama


	");
$update=$kaydet->execute(array(

'bol_baslik'=>htmlspecialchars($_POST['baslik']),
'bol_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:bol.php?durum=okey");
}else{
	Header("Location:bol.php?durum=no");
}

}


}
















if (isset($_POST['suretkaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE suret SET 

suret_baslik1=:suret_baslik1,
suret_baslik2=:suret_baslik2,
suret_baslik3=:suret_baslik3




	");
$update=$kaydet->execute(array(

'suret_baslik1'=>htmlspecialchars($_POST['bir']),
'suret_baslik2'=>htmlspecialchars($_POST['iki']),
'suret_baslik3'=>htmlspecialchars($_POST['uc'])


));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/hakkimizda/$eskiresim");
Header("Location:suret.php?durum=okey");
}else{
	Header("Location:suret.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE suret SET 



suret_baslik1=:suret_baslik1,
suret_baslik2=:suret_baslik2,
suret_baslik3=:suret_baslik3


	");
$update=$kaydet->execute(array(

'suret_baslik1'=>htmlspecialchars($_POST['bir']),
'suret_baslik2'=>htmlspecialchars($_POST['iki']),
'suret_baslik3'=>htmlspecialchars($_POST['uc'])
));
if ($update) {
Header("Location:suret.php?durum=okey");
}else{
	Header("Location:suret.php?durum=no");
}

}


}



























if (isset($_POST['musterikaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/musteri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE musteri SET 
musteri_bir=:musteri_bir,
musteri_iki=:musteri_iki,
musteri_uc=:musteri_uc,
musteri_dord=:musteri_dord

	");
$update=$kaydet->execute(array(
'musteri_bir'=>htmlspecialchars($_POST['bir']),
'musteri_iki'=>htmlspecialchars($_POST['iki']),
'musteri_uc'=>htmlspecialchars($_POST['uc']),
'musteri_dord'=>htmlspecialchars($_POST['dord'])

));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/musteri/$eskiresim");
Header("Location:musterirakam.php?durum=okey");
}else{
	Header("Location:musterirakam.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE musteri SET 

musteri_bir=:musteri_bir,
musteri_iki=:musteri_iki,
musteri_uc=:musteri_uc,
musteri_dord=:musteri_dord


	");
$update=$kaydet->execute(array(
'musteri_bir'=>htmlspecialchars($_POST['bir']),
'musteri_iki'=>htmlspecialchars($_POST['iki']),
'musteri_uc'=>htmlspecialchars($_POST['uc']),
'musteri_dord'=>htmlspecialchars($_POST['dord'])
));
if ($update) {
Header("Location:musterirakam.php?durum=okey");
}else{
	Header("Location:musterirakam.php?durum=no");
}

}


}

















if (isset($_POST['logokaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/logo';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE logo SET 

logo_resim=:logo_resim

	");
$update=$kaydet->execute(array(

'logo_resim'=>$resimadi

));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/logo/$eskiresim");
Header("Location:logo.php?durum=okey");
}else{
	Header("Location:logo.php?durum=no");
}

}


}





























if (isset($_POST['emailkaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/email';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE email SET 

email_baslik=:email_baslik,

email_resim=:email_resim

	");
$update=$kaydet->execute(array(

'email_baslik'=>htmlspecialchars($_POST['baslik']),

'email_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/email/$eskiresim");
Header("Location:email.php?durum=okey");
}else{
	Header("Location:email.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE email SET 

email_baslik=:email_baslik



	");
$update=$kaydet->execute(array(

'email_baslik'=>htmlspecialchars($_POST['baslik'])

));
if ($update) {
Header("Location:email.php?durum=okey");
}else{
	Header("Location:email.php?durum=no");
}

}


}






















if (isset($_POST['sirketkaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/sirket';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE sirket SET 

sirket_baslik=:sirket_baslik,
sirket_aciklama=:sirket_aciklama,
sirket_resim=:sirket_resim

	");
$update=$kaydet->execute(array(

'sirket_baslik'=>htmlspecialchars($_POST['baslik']),

'sirket_aciklama'=>$_POST['aciklama'],
'sirket_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/sirket/$eskiresim");
Header("Location:sirket.php?durum=okey");
}else{
	Header("Location:sirket.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE sirket SET 

sirket_baslik=:sirket_baslik,
sirket_aciklama=:sirket_aciklama



	");
$update=$kaydet->execute(array(

'sirket_baslik'=>htmlspecialchars($_POST['baslik']),

'sirket_aciklama'=>$_POST['aciklama']

));
if ($update) {
Header("Location:sirket.php?durum=okey");
}else{
	Header("Location:sirket.php?durum=no");
}

}


}






if (isset($_POST['brendkaydet'])) {
	$uploads_dir='resimler/brend';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into brend SET 

brend_sira=:brend_sira,

brend_resim=:brend_resim
	");
$insert=$kaydet->execute(array(


'brend_sira'=>htmlspecialchars($_POST['sira']),

'brend_resim'=>$resimadi
));


if ($insert) {
Header("Location:brend.php?sayfa=brend&durum=okey");
}else{
	Header("Location:brend.php?sayfa=brend&durum=no");
}

}














if (isset($_POST['brendduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/brend';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE brend SET 


brend_sira=:brend_sira,

brend_resim=:brend_resim
WHERE blog_id={$_POST['id']}
	");
$update=$kaydet->execute(array(

'brend_sira'=>htmlspecialchars($_POST['sira']),

'brend_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/brend/$eskiresim");
Header("Location:brend.php?durum=okey");
}else{
	Header("Location:brend.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE brend SET 

brend_sira=:brend_sira

WHERE brend_id={$_POST['id']}

	");
$update=$kaydet->execute(array(


'brend_sira'=>htmlspecialchars($_POST['sira'])


));
if ($update) {
Header("Location:brend.php?durum=okey");
}else{
	Header("Location:brend.php?durum=no");
}

}


}





if (isset($_POST['brendsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/brend/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM brend where brend_id=:brend_id");
$sil->execute(array(

'brend_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:brend.php?durum=okey");
}
else{
		Header("Location:brend.php?durum=no");

}
}










if (isset($_POST['tarifkaydet'])) {
	$uploads_dir='resimler/tarif';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into tarif SET 

tarif_yazi=:tarif_yazi,
tarif_baslik=:tarif_baslik,
tarif_sira=:tarif_sira,
tarif_bir=:tarif_bir,
tarif_iki=:tarif_iki,
tarif_uc=:tarif_uc,
tarif_dord=:tarif_dord,
tarif_bes=:tarif_bes,

tarif_qiymet=:tarif_qiymet
	");
$insert=$kaydet->execute(array(

'tarif_yazi'=>htmlspecialchars($_POST['baslik']),
'tarif_baslik'=>htmlspecialchars($_POST['baslikk']),
'tarif_sira'=>htmlspecialchars($_POST['sira']),

'tarif_bir'=>$_POST['bir'],
'tarif_iki'=>$_POST['iki'],
'tarif_uc'=>$_POST['uc'],
'tarif_dord'=>$_POST['dord'],
'tarif_bes'=>$_POST['bes'],


'tarif_qiymet'=>$_POST['qiymet']
));




if ($insert) {
Header("Location:tarif.php?durum=okey");
}else{
	Header("Location:tarif.php?durum=no");
}

}





if (isset($_POST['tarifduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/tarif';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");





$kaydet=$baglanti->prepare("UPDATE tarif SET 

tarif_yazi=:tarif_yazi,
tarif_baslik=:tarif_baslik,
tarif_sira=:tarif_sira,
tarif_bir=:tarif_bir,
tarif_iki=:tarif_iki,
tarif_uc=:tarif_uc,
tarif_dord=:tarif_dord,
tarif_bes=:tarif_bes,

tarif_qiymet=:tarif_qiymet
WHERE tarif_id={$_POST['id']}
	");
$update=$kaydet->execute(array(


'tarif_yazi'=>htmlspecialchars($_POST['baslik']),
'tarif_baslik'=>htmlspecialchars($_POST['baslikk']),
'tarif_sira'=>htmlspecialchars($_POST['sira']),

'tarif_bir'=>$_POST['bir'],
'tarif_iki'=>$_POST['iki'],
'tarif_uc'=>$_POST['uc'],
'tarif_dord'=>$_POST['dord'],
'tarif_bes'=>$_POST['bes'],


'tarif_qiymet'=>$_POST['qiymet']
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/tarif/$eskiresim");
Header("Location:tarif.php?durum=okey");
}else{
	Header("Location:tarif.php?durum=no");
}

}

else{


$kaydet=$baglanti->prepare("UPDATE duzenle SET 

tarif_yazi=:tarif_yazi,
tarif_baslik=:tarif_baslik,
tarif_sira=:tarif_sira,
tarif_bir=:tarif_bir,
tarif_iki=:tarif_iki,
tarif_uc=:tarif_uc,
tarif_dord=:tarif_dord,
tarif_bes=:tarif_bes,

tarif_qiymet=:tarif_qiymet

WHERE tarif_id={$_POST['id']}

	");
$update=$kaydet->execute(array(
'tarif_yazi'=>htmlspecialchars($_POST['baslik']),
'tarif_baslik'=>htmlspecialchars($_POST['baslikk']),
'tarif_sira'=>htmlspecialchars($_POST['sira']),

'tarif_bir'=>$_POST['bir'],
'tarif_iki'=>$_POST['iki'],
'tarif_uc'=>$_POST['uc'],
'tarif_dord'=>$_POST['dord'],
'tarif_bes'=>$_POST['bes'],


'tarif_qiymet'=>$_POST['qiymet']
));
if ($update) {
Header("Location:tarif.php?durum=okey");
}else{
	Header("Location:tarif.php?durum=no");
}

}


}





if (isset($_POST['tarifsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/tarif/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM tarif where tarif_id=:tarif_id");
$sil->execute(array(

'tarif_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:tarif.php?durum=okey");
}
else{
		Header("Location:tarif.php?durum=no");

}
}






if (isset($_POST['portfoliosil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/portfolio/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM portfolio where portfolio_id=:portfolio_id");
$sil->execute(array(

'portfolio_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:portfolio.php?durum=okey");
}
else{
		Header("Location:portfolio.php?durum=no");

}
}



























if (isset($_POST['galerikaydet'])) {
	$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into galeri SET 

galeri_baslik=:galeri_baslik,
galeri_kat=:galeri_kat,
galeri_sira=:galeri_sira,
galeri_aciklama=:galeri_aciklama,

galeri_resim=:galeri_resim
	");
$insert=$kaydet->execute(array(

'galeri_baslik'=>htmlspecialchars($_POST['baslik']),
'galeri_kat'=>htmlspecialchars($_POST['kat']),
'galeri_sira'=>htmlspecialchars($_POST['sira']),

'galeri_aciklama'=>$_POST['aciklama'],

'galeri_resim'=>$resimadi
));




if ($insert) {
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}





if (isset($_POST['galeriduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE galeri SET 
galeri_baslik=:galeri_baslik,
galeri_kat=:galeri_kat,
galeri_sira=:galeri_sira,
galeri_aciklama=:galeri_aciklama,

galeri_resim=:galeri_resim
WHERE galeri_id={$_POST['id']}
	");
$update=$kaydet->execute(array(

'galeri_baslik'=>htmlspecialchars($_POST['baslik']),
'galeri_kat'=>htmlspecialchars($_POST['kat']),
'galeri_sira'=>htmlspecialchars($_POST['sira']),

'galeri_aciklama'=>$_POST['aciklama'],

'galeri_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE galeri SET 
galeri_baslik=:galeri_baslik,
galeri_kat=:galeri_kat,
galeri_sira=:galeri_sira,
galeri_aciklama=:galeri_aciklama

WHERE galeri_id={$_POST['id']}

	");
$update=$kaydet->execute(array(

'galeri_baslik'=>htmlspecialchars($_POST['baslik']),
'galeri_kat'=>htmlspecialchars($_POST['kat']),
'galeri_sira'=>htmlspecialchars($_POST['sira']),

'galeri_aciklama'=>$_POST['aciklama']

));
if ($update) {
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}


}



if (isset($_POST['galerisil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM galeri where galeri_id=:galeri_id");
$sil->execute(array(

'galeri_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:galeri.php?durum=okey");
}
else{
		Header("Location:galeri.php?durum=no");

}
}


















if (isset($_POST['ehatekaydet'])) {
	$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into ehate SET 

ehate_baslik=:ehate_baslik,
ehate_sira=:ehate_sira
	");
$insert=$kaydet->execute(array(

'ehate_baslik'=>htmlspecialchars($_POST['baslik']),
'ehate_sira'=>htmlspecialchars($_POST['sira'])
));




if ($insert) {
Header("Location:ehate.php?durum=okey");
}else{
	Header("Location:ehate.php?durum=no");
}

}







if (isset($_POST['ehatesil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM ehate where ehate_id=:ehate_id");
$sil->execute(array(

'ehate_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:ehate.php?durum=okey");
}
else{
		Header("Location:ehate.php?durum=no");

}
}



















if (isset($_POST['fikirkaydet'])) {
	$uploads_dir='resimler/fikir';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into fikirler SET 

fikir_baslik=:fikir_baslik,

fikir_sira=:fikir_sira,
fikir_aciklama=:fikir_aciklama,
fikir_resim=:fikir_resim

	");
$insert=$kaydet->execute(array(

'fikir_baslik'=>htmlspecialchars($_POST['baslik']),

'fikir_sira'=>htmlspecialchars($_POST['sira']),

'fikir_aciklama'=>$_POST['aciklama'],
'fikir_resim'=>$resimadi

));




if ($insert) {
Header("Location:fikirler.php?durum=okey");
}else{
	Header("Location:fikirler.php?durum=no");
}

}










if (isset($_POST['fikirsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/fikir/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM fikirler where fikir_id=:fikir_id");
$sil->execute(array(

'fikir_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:fikirler.php?durum=okey");
}
else{
		Header("Location:fikirler.php?durum=no");

}
}
















if (isset($_POST['abone'])) {
	

$kaydet=$baglanti->prepare("INSERT into abone SET 

abone_email=:abone_email
	");
$insert=$kaydet->execute(array(

'abone_email'=>htmlspecialchars($_POST['email'])
));




if ($insert) {
Header("Location:../index.php?durum=okey");
}else{
	Header("Location:../index.php?durum=no");
}

}


if (isset($_POST['abonesil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/abone/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM abone where abone_id=:abone_id");
$sil->execute(array(

'abone_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:abone.php?durum=okey");
}
else{
		Header("Location:abone.php?durum=no");

}
}







if (isset($_POST['elaqe'])) {
	

$kaydet=$baglanti->prepare("INSERT into elaqe SET 

elaqe_adsoyad=:elaqe_adsoyad,
elaqe_telefon=:elaqe_telefon,
elaqe_mail=:elaqe_mail,
elaqe_xidmet=:elaqe_xidmet,
elaqe_text=:elaqe_text
	");
$insert=$kaydet->execute(array(

'elaqe_adsoyad'=>htmlspecialchars($_POST['isim']),
'elaqe_telefon'=>htmlspecialchars($_POST['nomre']),
'elaqe_mail'=>htmlspecialchars($_POST['eposta']),
'elaqe_xidmet'=>htmlspecialchars($_POST['xidmet']),
'elaqe_text'=>htmlspecialchars($_POST['mesaj'])
));




if ($insert) {
Header("Location:../index.php?durum=okey");
}else{
	Header("Location:../index.php?durum=no");
}

}






if (isset($_POST['elaqesil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/elaqe/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM elaqe where elaqe_id=:elaqe_id");
$sil->execute(array(

'elaqe_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:elaqe.php?durum=okey");
}
else{
		Header("Location:elaqe.php?durum=no");

}
}













if (isset($_POST['girisyap'])) {

	$kadi=htmlspecialchars($_POST['kadi']);
	$sifre=htmlspecialchars($_POST['sifre']);
	$sifreguclu=md5($sifre);



	$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_sifre=:kullanici_sifre  and kullanici_yetki=:kullanici_yetki");
	$kullanicisor->execute(array(
		'kullanici_adi'=>$kadi,
		'kullanici_sifre'=>$sifreguclu,
		'kullanici_yetki'=>2


	));


	$var=$kullanicisor->rowCount();

	if ($var >0) {
		$_SESSION['girisbelgesi']=$kadi;
		Header("Location:index?durum=hosgeldin");
	}
	else{
		Header("Location:login?durum=hata");
	}

}





if (isset($_POST['sliderkaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/slider';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE slider SET 

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_yazi=:slider_yazi,
slider_resim=:slider_resim

	");
$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_yazi'=>$_POST['yazi'],
'slider_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/slider/$eskiresim");
Header("Location:slider.php?durum=okey");
}else{
	Header("Location:slider.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE slider SET 

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_yazi=:slider_yazi

	");
$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_yazi'=>$_POST['yazi']
));
if ($update) {
Header("Location:slider.php?durum=okey");
}else{
	Header("Location:slider.php?durum=no");
}

}


}
















if (isset($_POST['portfoliokaydet'])) {
	$uploads_dir='resimler/portfolio';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into portfolio SET 

portfolio_sira=:portfolio_sira,

portfolio_resim=:portfolio_resim
	");
$insert=$kaydet->execute(array(


'portfolio_sira'=>htmlspecialchars($_POST['sira']),

'portfolio_resim'=>$resimadi
));


if ($insert) {
Header("Location:portfolio.php?sayfa=brend&durum=okey");
}else{
	Header("Location:portfolio.php?sayfa=brend&durum=no");
}

}















if (isset($_POST['portfoliosil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/portfolio/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM portfolio where portfolio_id=:portfolio_id");
$sil->execute(array(

'portfoliio_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:portfolio.php?durum=okey");
}
else{
		Header("Location:portfolio.php?durum=no");

}
}








if (isset($_POST['cokluresimsil'])) {
$yonlendir=$_POST['galeriid'];

	$cokluresimsil=$baglanti->prepare("DELETE from  cokluresim where id=:id ");

	$cokluresimsil->execute(array(
		'id'=>$_POST['id']


	));

	if ($cokluresimsil) {

		$resimsil=$_POST['resim'];
		unlink("resimler/cokluresim/$resimsil");
		header("Location:cokluresim?id=$yonlendir&yuklenme=basarili");
	}
	else{
			header("Location:cokluresim?id=$yonlendir&yuklenme=basarisiz");
	}
}






if (isset($_POST['uyelerkaydet'])) {

	$kadi=htmlspecialchars($_POST['kadi']);


	$sifre=htmlspecialchars($_POST['sifre']);
	$adsoyad=htmlspecialchars($_POST['adsoyad']);
	$sifreguclu=md5($sifre);


	$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_yetki=:kullanici_yetki ");
	$kullanicisor->execute(array(
		'kullanici_adi'=>$kadi,
		'kullanici_yetki'=>2


	));


	$var=$kullanicisor->rowCount();


	if ($var >0) {
		Header("Location:uyeler-ekle?yuklenme=kullanicivar");
	}
	else{
		echo "kullanıcı yok";


		$uploads_dir='resimler/kullanici';
		@$tmp_name= $_FILES['resim'] ["tmp_name"];
		@$name= $_FILES['resim'] ["name"];


		$sayi=rand(1,1000000);
		$sayi2=rand(1,100000);
		$sayi3=rand(10000, 20000000);


		$sayilar=$sayi.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



		$kullanicikaydet=$baglanti->prepare("INSERT into kullanici SET 



			kullanici_adi=:kullanici_adi,
			kullanici_sifre=:kullanici_sifre,
			kullanici_adsoyad=:kullanici_adsoyad,
			kullanici_yetki=:kullanici_yetki,
			kullanici_resim=:kullanici_resim
			

			");

		$insert=$kullanicikaydet->execute(array(
			'kullanici_adi'=>$kadi,
			'kullanici_sifre'=>$sifreguclu,
			'kullanici_adsoyad'=>$adsoyad,
			'kullanici_yetki'=>2,
			'kullanici_resim'=>$resimyolu



		));
		if ($insert) {

			header("Location:uyeler?yuklenme=basarili");
		}
		else{
			header("Location:uyeler?yuklenme=basarisiz");
		}


	}

}



if (isset($_GET['kullanicisil'])) {


	$kullanicisil=$baglanti->prepare("DELETE from  kullanici where kullanici_id=:kullanici_id ");

	$kullanicisil->execute(array(
		'kullanici_id'=>$_GET['id']


	));

	if ($kullanicisil) {
		Header("Location:uyeler?durum=basarili");
	}
	else{
		Header("Location:uyeler?durum=hata");
	}
}








?>









