<?php
include'../koneksi.php';

$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tglpinjam=strtotime($_POST['tglpinjam']);
$tglkembali=strtotime($_POST['tglkembali']);
$mysqltglpinjam=date('Y-m-d H:i:s',$tglpinjam);
$mysqltglkembali=date('Y-m-d H:i:s',$tglkembali);


If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbtransaksi
		SET idtransaksi= '$id_transaksi', idanggota='$id_anggota', idbuku='$id_buku',tglpinjam='$mysqltglpinjam', tglkembali='$mysqltglkembali'
		WHERE idtransaksi='$id_transaksi'"
	);
	header("location:../index.php?p=transaksi");
}
?>