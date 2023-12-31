<?php 
// koneksi database 
include 'koneksi.php'; 
//Memproses data saat form di submit 
if(isset($_POST["npm"]) && !empty($_POST["npm"])){ 
// menangkap data yang di kirim dari form 
$npm = $_POST['npm']; 
$nama = $_POST['nama']; 
$jekel = $_POST['jekel']; 
$jurusan = $_POST['jurusan']; 
$kelas = $_POST['kelas']; 
// mengupdate data ke database 
$update=mysqli_query($koneksi,"UPDATE tbmahasiswa SET 
nama='$nama',jekel='$jekel',kelas='$kelas',jurusan='$jurusan'  WHERE npm='$npm'")or die(mysql_error()); 
if($update){ 
header("location:index.php"); 
}else{ 
echo'Gagal menyimpan data! '; 
echo'<a href="index.php">Kembali</a>'; 
} 
} 
?>