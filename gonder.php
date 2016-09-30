<?php
$adsoyad = $_POST['name'];   // formumuzu post metoduyla gönderdiğimiz için post ile ad soyadı değişkenimize atıyoruz.
$email = $_POST['email'];    // aynı şekilde eposta adresimizi değişkenimize atıyoruz.
$mesaj = $_POST['message'];    // aynı şekilde eposta adresimizi değişkenimize atıyoruz.
$ipadres = $_SERVER['REMOTE_ADDR'];
$alici = "mustafa-uysal@outlook.com"; //Buraya iletişim formunun gönderileceği mail adresini yazıyoruz.
$konu = "Iletisim Formu";
if($email == "" || $adsoyad == "" || $mesaj == ""){
if($email == ""){   //eğer email değişkeni boş ise geriye 1 değerini göndersin
echo 1;
}
else if($adsoyad == ""){   // eğer adsoyad değeri boş ise geriye 2 değerini göndersin
echo 2;
}
else echo 3;


}
else{    //eğer adsoyad değişkeni dolu ise geriye değişkenin kendisini göndersin sebebi mesajın içinde ad soyadı yazdırmak.
		$mesajlar.="iletisim formu mesaji<br/><br/>";
		$mesajlar.="isim Soyisim: ".$adsoyad."<br/>";
		$mesajlar.="E-Mail: ".$email."<br/>";
		$mesajlar.="Mesaj: ".$mesaj."<br/>";
		$mesajlar.="Ip Adres: ".$ipadres."<br/>";
		 
		$mesajgonder=mail($alici,$konu, $mesajlar, "Content-type: text/html; charset=utf-8\r\n");
      
		echo $adsoyad;   
	}
	
?>