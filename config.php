<?php 
$host = "sql113.epizy.com";
$user = "epiz_24979459";
$password = "qmCOIv0Au7h";
$db  = "epiz_24979459_siakad";

// $host = "localhost";
// $user = "root";
// $password = "";
// $db  = "siakad";
$conn = mysqli_connect($host,$user,$password,$db);


function daftar($post)
{
	global $conn;
	$nama 	= htmlspecialchars($post['nama']);
	$nisn 	= htmlspecialchars($post['nisn']);
	$nik 	= htmlspecialchars($post['nik']);
	$jk		= htmlspecialchars($post['jk']);
	$tgl_lahir    = htmlspecialchars($post['tgl_lahir']);
	$tempat_lahir = htmlspecialchars($post['tempat_lahir']);
	$agama 	= htmlspecialchars($post['agama']);
	$ibu_kandung = htmlspecialchars($post['ibu_kandung']);
	$alamat = htmlspecialchars($post['alamat']);
	$desa_kelurahan = htmlspecialchars($post['desa_kelurahan']);
	$kecamatan = htmlspecialchars($post['kecamatan']);
	$asal_sekolah = htmlspecialchars($post['asal_sekolah']);
	$nohp = htmlspecialchars($post['nohp']);

	// $nik =  mysqli_query($conn,"SELECT * FROM siswa WHERE nik = '$nik' ");
	// $nisn =  mysqli_query($conn,"SELECT * FROM siswa WHERE nisn = '$nisn' ");
	// $nohp = mysqli_query($conn,"SELECT * FROM siswa = WHERE hp = '$nohp' ");

	// $ceknisn = mysqli_query($conn,"SELECT * FROM siswa WHERE nisn = '$nisn' ");
	
	// if (mysqli_num_rows($ceknisn) > 0 ) {
	// 	header("Location: index.php?nisn");
	// 	return false;
	// }


	$query = "INSERT INTO siswa VALUES('','$nama','','$jk','$nisn','$tempat_lahir','$tgl_lahir','$nik','$agama','$alamat','',
		'','','$desa_kelurahan','$kecamatan','',
		'','','','$nohp','','','','','','','','','','','$ibu_kandung','','','','',
		'','','','','','','','','','','','','','','','','','','','','','$asal_sekolah','','','','','','','','','','','','',
		'','userimg.png','','$nisn')";
	$result = mysqli_query($conn, $query); 
	return mysqli_affected_rows($conn);
}




 ?>