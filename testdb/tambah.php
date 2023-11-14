<?php 
	// session_start(); 

	// if ( !isset($_SESSION["login"])) {
	// 	header("Location: login.php");
	// 	exit;
	// }
	require 'koneksi.php';

	if( isset($_POST["submit"]) ) {
		

		if (tambah ($_POST) > 0 ) {
			echo "
			<script>
					alert('data berhasil ditambahkan');
					document.location.href = 'index.php';
			</script>
			";
		}else {
			echo "
				<script>
					alert('data gagal ditambahkan');
					document.location.href = 'index.php';
				</script>
			";
		}		
	}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark">
	

    <h1 class="text-white text-center mt-5 bg-5">TAMBAH DATA</h1>

<div class="container">
	<form class="" action="" method="post">
<div class="row">

<!-- 
<div class="mb-3 col-6">
  <label for="exampleFormControlInput1" class=" text-white form-label">id</label>
  <input type="text" readonly class="form-control" name="id" value="<?= $swa["id"] ?>" id="nama" placeholder="Masukkan id">
</div> -->

<div class="mb-3 col-6">
  <label for="exampleFormControlInput1" class=" text-white form-label">Nama</label>
  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
</div>

<div class="mb-3 col-6">
  <label for="exampleFormControlInput1" class=" text-white form-label">Alamat</label>
  <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
</div>

<div class="mb-3 col-6">
  <label for="exampleFormControlInput1" class=" text-white form-label">Nohp</label>
  <input type="number" class="form-control" name="nohp" id="nohp" placeholder="Masukkan nohp">
</div>

<div class="mb-3 col-6">
  <label for="exampleFormControlInput1" class=" text-white form-label">Kampus</label>
  <!-- <input type="text" class="form-control" name="kampus" id="kampus" placeholder="Masukkan Kampus"> -->
  <select name="kampus" id="kampus" class="form-select" aria-label="Default select example">
  <option selected>Pilih</option>
  <option value="Polije">Polije</option>
  <option value="Polije Bws">Polije Bws</option>
  <option value="Unej">Unej</option>
  <option value="Unej Bws">Unej Bws</option>
</select>
</div>


</div>

<br><br>
<div>
<button type="submit" name="submit" class=" text-white btn btn-success">Simpan</button>
<a style="float:right;" class="btn btnpp float-left btn-danger text-white" href="index.php" >Kembali</a>
</div> 

</div>



	</form>

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


