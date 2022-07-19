<div id="label-page"><h3>Tampil Data transaksi</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=transaksi-input" class="tombol">Tambah Transaksi</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Transaksi</th>
			<th>ID Anggota</th>
			<th>ID Buku</th>
			<th>Tanggal Peminjaman</th>
			<th>Tanggal Pengembalian</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$sql="SELECT * FROM tbtransaksi ORDER BY idtransaksi DESC";
		$q_tampil_transaksi = mysqli_query($db, $sql);
		
		$nomor=1;
		while($r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_transaksi['idtransaksi']; ?></td>
			<td><?php echo $r_tampil_transaksi['idanggota']; ?></td>
			<td><?php echo $r_tampil_transaksi['idbuku']; ?></td>
			<td><?php echo $r_tampil_transaksi['tglpinjam']; ?></td>
			<td><?php echo $r_tampil_transaksi['tglkembali']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="cetak/cetak-kartu-identitas-transaksi.php?id=<?php echo $r_tampil_transaksi['dtransaksi]; ?>" 
					target="_blank" class="tombol">Cetak Kartu</a></div>

				<div class="tombol-opsi-container"><a href="index.php?p=transaksi-edit&id=<?php echo $r_tampil_transaksi['idtransaksi'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/transaksi-hapus.php?id=<?php echo $r_tampil_transaksi['idtransaksi']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>