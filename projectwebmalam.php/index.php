<!DOCTYPE html>
<html>
<head>
<title>DATA MAHASISWA</title>
</head>
<body>
<h2>DATA MAHASISWA</h2>
<br/>
<a href="tambah_mahasiswa.php"> + TAMBAH MAHASISWA</a>
<br/>
<br/>
<table border="1" cellpadding="10">
<tr>
<th>No</th>
<th>NPM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Jenis Kelamin</th>
<th>Kelas</th>
<th>Photo</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from tbmahasiswa");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['npm']; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['jurusan']; ?></td>
<td><?php echo $d['jekel']; ?></td>
<td><?php echo $d['kelas']; ?></td>
<td><img src="<?php echo "file/".$d['photo']; ?>" width="100"height="130" ></td>
<td>
<a href="ubah_mahasiswa.php?id=<?php echo

$d['npm']; ?>">EDIT</a> |

<a href="hapus.php?id=<?php echo $d['npm'];

?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>