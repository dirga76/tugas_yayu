<?php
include 'koneksi.php';

  $id = $_POST['id'];
  $pemasukan = $_POST['pemasukan'];
  $pengeluaran = $_POST['pengeluaran'];
  if($resi_pengelolaan != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); 
    $x = explode('.', $resi_pengelolaan);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['resi_pengelolaan']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$resi_pengelolaan; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
					$query = "INSERT INTO data_uang (pemasukan, pengeluaran) VALUES ('$pemasukan','$pengeluaran')";
                   
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {

                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi data yang boleh hanya jpg atau png.');window.location='tambah_data.php';</script>";
              }
    } else {
		 $query = "INSERT INTO data_uang (pemasukan, pengeluaran) VALUES ('$pemasukan','$pengeluaran')";
     	 
     	 $result = mysqli_query($koneksi, $query);
		  
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }
