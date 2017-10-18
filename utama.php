<?php
	include "config/koneksi.php";
?>
<html>
<head>
	<title>Management Produk Kardi Olshop</title>
	<link rel="stylesheet" href="css/style.css">	
	<link rel="icon" href="img/bahan/icon/favicon.png">
	<script type="text/javascript">
		window.onload = function() { jam(); }

		function jam() {
			var e = document.getElementById('jam'),
			d = new Date(), h, m, s;
			h = d.getHours();
			m = set(d.getMinutes());
			s = set(d.getSeconds());

			e.innerHTML = h +':'+ m +':'+ s;
	
			setTimeout('jam()', 1000);
		}

		function set(e) {
			e = e < 10 ? '0'+ e : e;
			return e;
		}
	</script>
</head>
<body>
	<div id="container-center">
		<div id="nav">
			<img style="float:left" src="img/bahan/icon/logo.png"/><font style="float:left;margin:8px 0px 0px 10px;color:#F08080">Management Produk Kardi Olshop</font>
			<!--<div style="float:right;margin:3px 25px 0px 0px"><a href="#"><img src="img/bahan/icon/keranjang.png"/><font style="float:right;margin:5px 0px 0px 5px">0 pcs</font></a></div>-->
		</div>
		<div class="konten">
			<div class="konten-kiri" style="margin-top:55px;">
				<div style="width:195px;background-color:#FAFAD2;padding:3px;margin:3px 0px 3px 0px">
					<div style="padding:10px;border: #F4A460 1px dashed;color:#696969;margin-right:0px"><img src="img/bahan/icon/open.png"/><font style="float:right;margin-top:6px;margin-right:40px"><h3 id="jam"></h3></font></div>
				</div>
				<div class="vertical-menu">
					<a href="#" class="active" style="font-weight:bold">Kategori</a>
					<a href="index.php"><font style="">Beranda</font></a>
					<a href="?mod=list&list=input-produk"><font style="">Input Produk</font></a>
					<a href="?mod=list&list=produk"><font style="">List Produk</font></a>
				</div>
				<div class="banner-kiri">
					<img src="img/bahan/banner2.jpg" width="200px"/>
				</div>
			</div>
			<div class="konten-kanan" style="margin-top:35px;">
				<?php
					include "konten.php";
				?>
			</div>
		</div>
	</div>
</body>