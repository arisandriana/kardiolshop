<?php
	session_start();
	include "config/koneksi.php";
	$mod = $_GET['list'];
	
	/* MODUL */
	if ($mod == 'produk') {
		echo "
				<div style='float:left;clear:both;border: #F08080 0px solid;padding:5px 5px 5px 0px;width:150px;border-width:0px 0px 3px 0px;margin:25px 0px 0px 0px'>
					<div style='float:left;'><img src='img/bahan/icon/produk.png'/></div><font style='float:left;margin-top:2px;font-family:calibri;color:#696969;padding-left:5px'>Produk</font>
				</div>
				<div class='list-produk' style='clear:both'>";
				
				$sql = "SELECT * FROM produk";
				$query=mysqli_query($db_link,$sql);
					$no = 1;
				if(mysqli_num_rows($query)>0){
					while($data = mysqli_fetch_assoc($query)){
						echo "
							<div class='list-box-produk'>
								<img src='img/produk/$data[foto]' height='150px'/>
								<a href='?mod=list&list=detail-produk&idp=$data[id]'><font style='float:left;clear:both;padding:5px;color:#696969;font-size:13px'>$data[nama]<br></font><font style='float:left;clear:both;font-size:10px;'>*Klik untuk lihat detail barang</font></a>
							</div>
						";
						$no++;
					}
				}else{
					echo"
						<div class='semua-kotak'>
							<centeR><font color='red'>Tidak ada data !</font></center>
						</div>
						";
				}
				echo"</div>";
	}elseif ($mod == 'detail-produk'){
		$sql1 = "SELECT * FROM produk WHERE id=$_GET[idp]";
		$query1=mysqli_query($db_link,$sql1);
		$data1 = mysqli_fetch_assoc($query1);
		echo "<div style='float:left;clear:both;border: #F08080 0px solid;padding:5px 5px 5px 0px;width:150px;border-width:0px 0px 3px 0px;margin:25px 0px 0px 0px'>
					<div style='float:left;'><img src='img/bahan/icon/produk.png'/></div><font style='float:left;margin-top:2px;font-family:calibri;color:#696969;padding-left:5px'>$data1[nama]</font>
				</div>
				<div style='float:left;clear:both'>
				
					<form method='post' action='aksi.php?mod=bagikan-produk' enctype='multipart/form-data'>
							<table class='list' style='margin-top:15px;width:600px'>
								<tr>
									<td rowspan='5' width=200px><img src='img/produk/$data1[foto]' width='200px'/><input type='hidden' name='idp' value='$data1[id]'/></td>
									<td colspan='2'><b>Deskripsi barang</b></td>
								</tr>
								<tr>
									<td width='100px'>Jenis</td>
									<td>$data1[jenis]</td>
								</tr>
								<tr>
									<td>Harga</td>
									<td>Rp. $data1[harga]</td>
								</tr>
								<tr>
									<td>Garansi</td>
									<td>$data1[garansi]</td>
								</tr>
								<tr>
									<td>Pengiriman</td>
									<td>$data1[pengiriman]</td>
								</tr>
								<tr>
									<td colspan='3' align='right'>
									<button class='button1' name='bagikan-produk'><span>Bagikan</span></button>
								<select name='bagikanke'>
									<option name='bagikanke' value='Facebook'>Facebook</option>
									<option name='bagikanke' value='Twitter'>Twitter</option>
									<option name='bagikanke' value='Instagram'>Instagram</option>
								</select></td>
								</tr>
							</table>
						</form>
				</div>";
	}elseif ($mod == 'input-produk'){
		echo"
				<div style='float:left;clear:both;border: #F08080 0px solid;padding:5px 5px 5px 0px;width:150px;border-width:0px 0px 3px 0px;margin:25px 0px 0px 0px'>
					<div style='float:left;'><img src='img/bahan/icon/produk.png'/></div><font style='float:left;margin-top:2px;font-family:calibri;color:#696969;padding-left:5px'>Input Produk</font>
				</div>
				<div style='float:left;clear:both'>
				
				<form method='post' action='aksi.php?mod=input-produk' enctype='multipart/form-data'>	
					<table class='list' style='margin-top:15px;width:600px'>
						<tr>						
							<td rowspan='6' width=200px><img src='img/bahan/icon/kaos.png' width='200px'/><input type='file' name='foto' required /></td>
							<td>Nama</td>
							<td><input type='text' name='namabrg'/></td>
						</tr>
						<tr>
							<td colspan='2'><b>Deskripsi barang</b></td>
						</tr>
						<tr>
							<td>Jenis</td>
							<td>		
								<select name='jenis'>
									<option name='jenis' value='Jaket'>Jaket</option>
									<option name='jenis' value='Celana'>Celana</option>
									<option name='jenis' value='Kaos'>Kaos</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Harga</td>
							<td><input type='text' name='harga'/></td>
						</tr>
						<tr>
							<td>Garansi</td>
							<td><input type='text' name='garansi'/></td>
						</tr>
						<tr>
							<td>Pengiriman</td>
							<td>							
								<select name='pengiriman'>
									<option name='pengiriman' value='JNE'>JNE</option>
									<option name='pengiriman' value='TIKI'>TIKI</option>
									<option name='pengiriman' value='PAHALA'>PAHALA</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan='3' align='right'>";
							echo"<button class='button1' name='simpan-produk'><span>Simpan</span></button></td>
						</tr>
					</table>
				</form>
				</div>
		";
	}elseif ($mod == 'awal'){
		
			/*<div class='banner-iklan'>
				<img src='img/bahan/banner.jpg' width='700px'/>
			</div>*/
		echo"
			<div style='float:left;clear:both;border: #F08080 0px solid;padding:5px 5px 5px 0px;width:190px;border-width:0px 0px 3px 0px;margin:30px 0px 0px 0px'>
				<div style='float:left;'><img src='img/bahan/icon/logo-25.png'/></div><font style='float:left;margin-top:2px;font-family:calibri;color:#696969;padding-left:5px'><b>Tentang Cardi</b></font>
			</div>
			<div style='text-align:justify;line-height:20px;width:700px;float:left;clear:both;padding:10px 0px 10px 0px;wordwrap:break-word;'>
				<font style='font-family:arial;color:#696969;font-size:13px'>
					
				</font>
			</div>
		";
	}elseif ($mod == 'notifikasi'){
		echo"
				<div style='float:left;clear:both;border: #F08080 0px solid;padding:5px 5px 5px 0px;width:150px;border-width:0px 0px 3px 0px;margin:25px 0px 0px 0px'>
					<div style='float:left;'><img src='img/bahan/icon/produk.png'/></div><font style='float:left;margin-top:2px;font-family:calibri;color:#696969;padding-left:5px'>Notifikasi</font>
				</div>
				<div style='float:left;clear:both;margin-top:10px;width:600px;border: #2E8B57 1px solid;padding:10px;font-size:12px;background-color:#98FB98;'>
					<center>Produk Berhasil dibagikan</center>
				</div>
		";
	}
?>