<?php
//koneksi ke mysql
$conn = mysqli_connect ("localhost","root","","dbmahasiswa");
if (mysqli_connect_errno()){
echo "Koneksi Gagal".mysqli_connect_error();
}
else{
    $vnpm= $_POST['npm'];
    $vnama = $_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $jekel=$_POST['jekel'];
    $vkelas=$_POST['kelas'];
    $ekstensi_diperbolehkan = array('png','jpg');
    $photo = $_FILES['file']['name'];
$x = explode('.', $photo);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$namafile = 'img_'.$vnpm.'.jpg';
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
if($ukuran < 1044070){
move_uploaded_file($file_tmp, 'file/'.$namafile);
    $query= mysqli_query($conn,"insert into tbmahasiswa (npm,nama,jurusan,jekel,kelas,photo)
    values ('$vnpm','$vnama','$jurusan','$vjekel','$vkelas','$namafile')");
    if($query){
        echo "<script>alert('DATA BERHASIL DI SIMPAN');window.location='index.php';</script>";
        
        }else{
        echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>";
        
        }
        }else{
        echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
        }
        }else{
        echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window.location='tambahdata.php';</script>";
        
        }
        }
    ?>