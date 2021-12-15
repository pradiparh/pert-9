<?php
include "koneksi.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<mahasiswa>";
 echo"<Nim>",$data['Nim'],"</Nim>";
 echo"<nama>",$data['nama'],"</nama>";
 echo"<kelas>",$data['kelas'],"</kelas>";
 echo"<alamat>",$data['alamat'],"</alamat>";
 echo"<kode_matkul>",$data['kode_matkul'],"</kode_matkul>";
 echo "</mahasiswa>";
}
echo "</data>";
?>
