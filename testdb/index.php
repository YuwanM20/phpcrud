<?php
require 'Koneksi.php';


	$query=query("SELECT * FROM datauser");

	// if ( isset($_POST["cari"]) ) {
	// 	$query = cari ($_POST["keyword"]);
	// }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Belajar</title>
    <style>

    </style>
  </head>
  <body style="background-color: rgb(52, 53, 54);">

    <h1 class="mt-5 text-white fw-bold text-center">Data Diri</h1>

<div class="container">

    <a class="btn mt-5 btn-primary text-white fw-bold" href="tambah.php">Tambah</a>
    <br> <br>
    <table class=" table table-bordered">
        <thead class="bg-dark text-white">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nohp</th>
            <th scope="col">Kampus</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <!-- Buat Row +1 id -->
        <!-- <?php $a=1; ?> 
        <?php  $a++; ?> -->
<?php foreach ($query as $getdata ) :?>
        <tbody class="text-white">
          <tr>
            <td><?= $getdata["id"]; ?></td>
            <td><?= $getdata["nama"]; ?></td>
            <td><?= $getdata["alamat"]; ?></td>
            <td><?= $getdata["nohp"]; ?></td>
            <td><?= $getdata["kampus"]; ?></td>
            <td>
            <a class="btn btn-success text-white fw-bold" href="edit.php? id=<?=$getdata["id"];?>">Edit</a>
            <a class="btn btn-danger text-white fw-bold" href="hapus.php? id=<?=$getdata["id"];?>" onclick="return confirm ('yakin ingin menghapus?');">hapus</a>
            <a class="btn btn-info text-white fw-bold" href="#" >Info</a>
            </td>
          </tr>
        </tbody>
       
<?php endforeach; ?>
      </table>

</div>
<footer style="  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #56B0F6;
  padding:10px;
  color: white;
  text-align: center;">
		<h5>Yuwan.Era</h5>
	</footer>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>