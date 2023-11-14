<?php
require_once "koneksi.php";

class Mahasiswa 
{

	public  function get_mhss()
	{
		global $koneksi;
		$query="SELECT * FROM datauser";
		$data=array();
		$result=$koneksi->query($query);
		while($row=mysqli_fetch_object($result))
		{
			$data[]=$row;
		}
		$response=array(
							'status' => 1,
							'message' =>'Get List Mahasiswa Successfully.',
							'data' => $data
						);
		header('Content-Type: application/json');
		echo json_encode($response);
	}

	public function get_mhs($id=0)
	{
		global $koneksi;
		$query="SELECT * FROM datauser";
		if($id != 0)
		{
			$query.=" WHERE id=".$id." LIMIT 1";
		}
		$data=array();
		$result=$koneksi->query($query);
		while($row=mysqli_fetch_object($result))
		{
			$data[]=$row;
		}
		$response=array(
							'status' => 1,
							'message' =>'Get Mahasiswa Successfully.',
							'data' => $data
						);
		header('Content-Type: application/json');
		echo json_encode($response);
		 
	}
}

?>