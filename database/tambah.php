<?php
include('konek.php');
if(isset($_POST['button'])){ 
    $id = $_POST['id'];
    $suara	= $_POST['earned-vote '];
    $kandidat = $_SELECT['Name'];
	
	$sql	= 'insert into candidates (id,earned_vote,Name) values ("'.$id.'","'.$suara.'","'.$Kandidat.'",)';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: siswa.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
?>