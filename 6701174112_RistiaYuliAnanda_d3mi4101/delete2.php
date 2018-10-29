<?php 
require_once("db2.php");
$nim = $_GET["nim"];
$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
if(mysqli_query($conn,$sql)) {
  header("Location: list.php");
}else {
  echo "Gagal menghapus data ". $nim;
}