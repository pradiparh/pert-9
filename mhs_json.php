<?php
include "koneksi.php";
$sql="select * from mahasiswa order by nim";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['Nim'] = $r['Nim'];
 $h['nama'] = $r['nama'];
 $h['kelas'] = $r['kelas'];
 $h['alamat'] = $r['alamat'];
 $h['kode_matkul'] = $r['kode_matkul'];
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>
