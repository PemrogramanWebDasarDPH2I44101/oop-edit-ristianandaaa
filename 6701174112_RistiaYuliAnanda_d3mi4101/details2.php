<?php
require_once("db2.php");
$nim = $_GET["nim"];
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Details <?php echo $row["nama"] ?></title>
</head>
<body>
  <table cellpadding="5">
    <tr>
      <td>Nama</td>
      <td><?php echo $row["nama"] ?></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td><?php echo $row["nim"] ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?php echo $row["jk"] ?></td>
    </tr>
    <tr>
      <td>Prodi</td>
      <td><?php echo $row["prodi"] ?></td>
    </tr>
    <tr>
      <td>Fakultas</td>
      <td><?php echo $row["fak"] ?></td>
    </tr>
    <tr>
      <td>Asal</td>
      <td><?php echo $row["asal"] ?></td>
    </tr>
    <tr>
      <td>Moto hidup</td>
      <td><?php echo $row["motto"] ?></td>
    </tr>
    <tr>
      <td colspan="2"><a href="form_edit2.php?nim=<?php echo $row['nim'] ?>">Edit</a> | <a href="delete2.php?nim=<?php echo $row['nim'] ?>">Hapus</a></td>
    </tr>
  </table>
</body>
</html>