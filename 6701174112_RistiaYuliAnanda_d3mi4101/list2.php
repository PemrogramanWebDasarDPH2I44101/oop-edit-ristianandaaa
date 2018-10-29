<?php
require_once("DB.php");
if(isset($_GET["cari"])) {
  $value = $_GET["cari"];
  $query = "SELECT * FROM mahasiswa WHERE nim like '%$value%'";
}else {
  $query = "SELECT * FROM mahasiswa";
}
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lihat Data</title>
</head>
<body bgcolor="#DCDCDC">
  <h1 align="center">DATA MAHASISWA</h1>
  <table align="center" width="50%" cellpadding="5" border="1" style="border-collapse: collapse"bgcolor="yellow">
    <tr>
      <td>
        <a href="registrasi.php">Registrasi</a>
      </td>
      <td align ="right"colspan="7">
        <form action="list.php" method="get">
          <input type="text" name="cari" placeholder="Cari Mahasiswa">
          <input type="submit" value="Cari" a href="list2.php">
        </form>
      </td>
    </tr>
    <tr bgcolor=" #00CED1">
      <th>Nama</th>
      <th>NIM</th>
      <th>Jenis Kelamin</th>
      <th>Program Studi</th>
      <th>Fakultas</th>
      <th>Asal</th>
      <th>Motto Hidup</th>
      <th>Aksi</th>
    </tr> 
    <?php if(mysqli_num_rows($result) > 0) : ?>
    <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?php echo $row["nama"] ?></td>
      <td><?php echo $row["nim"] ?></td>
       <td><?php echo $row["jk"] ?></td>
        <td><?php echo $row["prodi"] ?></td>
         <td><?php echo $row["fak"] ?></td>
          <td><?php echo $row["asal"] ?></td>
           <td><?php echo $row["motto"] ?></td>
      <td><a href="delete2.php?nim=<?php echo $row['nim'] ?>">Hapus</a></td>
    </tr>
    <?php } endif ?>
  </table>
</body>
</html>