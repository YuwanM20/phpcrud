<?php
	$koneksi=mysqli_connect("localhost","root","","dbtest_datadiri");

	function query($query){
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$tempat=[];

		while ($row=mysqli_fetch_assoc($result)) {
			$tempat[]=$row;
		}
		return $tempat;
	}






    function tambah($data){
		global $koneksi;

		$nama = htmlspecialchars($data["nama"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$nohp = htmlspecialchars($data["nohp"]);
		$kampus = htmlspecialchars($data["kampus"]);

		$query = "INSERT INTO datauser (nama, alamat, nohp, kampus)
		VALUES ('$nama', '$alamat', '$nohp', '$kampus')";


		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}


    function ubah($data){
		global $koneksi;

		$id = $data["id"];

		$nama = htmlspecialchars($data["nama"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$nohp = htmlspecialchars($data["nohp"]);
		$kampus = htmlspecialchars($data["kampus"]);

		
		$query = "UPDATE datauser SET 
				nama = '$nama',
				alamat = '$alamat',
				nohp = '$nohp',
				kampus = '$kampus'
				WHERE id = $id
				";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

    function hapus($id){
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM datauser WHERE id=$id");
		return mysqli_affected_rows($koneksi);
	}

	function cari($keyword){
		$query = "SELECT * FROM tb_covid 
				WHERE
				waktu LIKE '%$keyword%' OR
				positif LIKE '%$keyword%' OR
				sembuh LIKE '%$keyword%' OR
				meninggal LIKE '%$keyword%'
		";
	
		return query ($query);
	}


?>