<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pijarcamp | Edit Data</title>
</head>

<body>
	<h3>Form Edit Data</h3>

	<table>
		<form action="<?= base_url('welcome/editproduk') ?>" method="post">
			<tr>
				<input type="hidden" value="<?= $data_produk->id_produk ?>" name="id_produk">
				<td>Nama Produk</td>
				<td>:</td>
				<td><input type="text" name="nama_produk" value="<?= $data_produk->nama_produk ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="ket" value="<?= $data_produk->keterangan ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" value="<?= $data_produk->harga ?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jumlah" value="<?= $data_produk->jumlah ?>"></td>
			</tr>
			<tr>
				<td colspan="3">
					<center>
						<input type="submit" value="SIMPAN">
				</td>
				</center>
			</tr>
		</form>
	</table>
</body>

</html>