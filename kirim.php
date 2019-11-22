<?php
if($_POST['kirim']){
	$admin = 'audreysaudjhana16@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$name	= htmlentities($_POST['nama']);
	$Email	= htmlentities($_POST['email']);
	$Massage= htmlentities($_POST['judul']);
	
	$pengirim	= 'Dari: '.$name.' <'.$Email.'>';
	
	if(mail($admin, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="kontak.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="kontak.html">Kembali</a>';
	}
}else{
	header("Location: kontak.html");
}
?>