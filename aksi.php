<?php
session_start();

if($_GET['act']=='upload_foto'){
$nama_file = $_FILES['foto']['name'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$rand = rand(1000000, 9999999);
$extension=end(explode(".", $nama_file));
$newfilename=$rand.".".$extension;
if(move_uploaded_file($lokasi_file,"images/".$newfilename)){
    $_SESSION['foto'] = $newfilename;
    header('location:index.php');
}else{
    header('location:error.php?error=upload_foto_gagal');
}
}

if($_GET['act']=='upload_ttd'){

$nama_file = $_FILES['ttd']['name'];
$lokasi_file = $_FILES['ttd']['tmp_name'];
$rand = rand(1000000, 9999999);
$extension=end(explode(".", $nama_file));
$newfilenames=$rand.".".$extension;

if(move_uploaded_file($lokasi_file,"images/".$newfilenames)){
    $_SESSION['ttd'] = $newfilenames;
    header('location:index.php');
}else{
    header('location:error.php?error=upload_ttd_gagal');
}
}


?>