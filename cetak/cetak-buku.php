<?php
$servername = "localhost";
$username	="root";
$password	="";
$dbname		="dbpus";

$conn =mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection Failed".mysqli_connect_error());
}
	require('../koneksi.php');
	require('../fpdf184/fpdf.php');
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(190,7,'LAPORAN BUKU', 0,1, 'C');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(10,7,'',0.1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(20,6,'NO',1,0);
	$pdf->Cell(50,6,'NAMA',1,0);
	$pdf->Cell(35,6,'JENIS KELAMIN',1,0);
	$pdf->Cell(40,6,'ALAMAT',1,0);
	$pdf->Cell(50,6,'STATUS',1,1);
	$pdf->SetFont('Arial','',10);
	$query = mysqli_query($conn, "SELECT * FROM tbanggota");
	while ($row = mysqli_fetch_array($query)){
	$pdf->Cell(20,6,$row['idanggota'],1,0);
	$pdf->Cell(50,6,$row['nama'],1,0);
	$pdf->Cell(35,6,$row['jeniskelamin'],1,0);
	$pdf->Cell(40,6,$row['alamat'],1,0);
	$pdf->Cell(50,6,$row['status'],1,1);
}
$pdf->Output();
?>