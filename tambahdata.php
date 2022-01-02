<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
	<style type="text/css">
		*{
			font-family: "Product Sans";
	}
      h1{
        text-transform: uppercase;
        color: salmon;
      }
      button{
      	background-color: salmon;
      	color: #fff;
      	padding: 10px;
      	font-size: 12px;
      	border: 0;
      	margin-top: 20px;
      }
      .base{
      	width: 400px;
      	padding: 20px;
      	margin-left: auto;
      	margin-right: auto;
      	background-color: #ededed;
      } 
      label{
      	margin-top: 10px;
      	float: left;
      	text-align: left;	
      	width: 100%;
		}
		input{
			padding: 6px;
			width: 	100%;
			box-sizing: border-box;	
			background-color: #f8f8f8;
			border: 2px solid #ccc;
			outline-color: salmon;

		}
	</style>
</head>
<body>
		<center><h1>Tambah Data</h1></center>
		<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
		<section class="base">
			<div>	
				<label>Pemasukan</label>
				<input type="text" name="pemasukan" autofocus="" required=""/>
			</div>
			<div>	
				<label>Pengeluaran</label>
				<input type="text" name="pengeluaran"/>
            </div>
			<div>	
					<button type="submit">Simpan Data</button>
			</div>
		</section>
	</form>
</body>
</html>