<?php
include'../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tglpinjam=strtotime($_POST['tglpinjam']);
$tglkembali=strtotime($_POST['tglkembali']);
$mysqltglpinjam=date('Y-m-d H:i:s',$tglpinjam);
$mysqltglkembali=date('Y-m-d H:i:s',$tglkembali);
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbtransaksi
		VALUES('$id_transaksi','$id_anggota','$id_buku','$mysqltglpinjam','$mysqltglkembali')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=transaksi");
}
?>