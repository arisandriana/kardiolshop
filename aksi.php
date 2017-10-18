<?php
	include "config/koneksi.php";
	$mod=$_GET['mod'];
	
	/* SIMPAN */
	if(isset($_POST['simpan-produk'])){
		$path2="img/produk/"; 		
		$valid_formats = array("jpg", "png", "gif", "bmp");
		$name = $_FILES['foto']['name'];
		$size = $_FILES['foto']['size'];
				
		if(strlen($name)){
			list($txt, $ext) = explode(".", $name);
			if(in_array($ext,$valid_formats) && $size<(3088*2056)){
				$namafoto = time().substr($txt, 100).".".$ext;
				$tmp = $_FILES['foto']['tmp_name'];
				move_uploaded_file($tmp, $path2.$namafoto);
			}
		}
		$nama = $_POST['namabrg'];
		$jenis = $_POST['jenis'];
		$harga = $_POST['harga'];
		$garansi = $_POST['garansi'];
		$pengiriman = $_POST['pengiriman'];
		
		$sql= "INSERT INTO produk(nama,jenis,harga,garansi,pengiriman,foto) VALUES('$nama','$jenis','$harga','$garansi','$pengiriman','$namafoto')";
		mysqli_query($db_link,$sql);
		echo "<meta http-equiv='refresh' content='0; url=utama.php?mod=list&list=produk'>";
	}elseif(isset($_POST['bagikan-produk'])){
		$id = $_POST['idp'];
		$ke = $_POST['bagikanke'];
		
		$sql= "INSERT INTO bagikan(idp,dibagikanke) VALUES('$id','$ke')";
		mysqli_query($db_link,$sql);
		echo "<meta http-equiv='refresh' content='0; url=utama.php?mod=list&list=notifikasi'>";
	}
	
?>