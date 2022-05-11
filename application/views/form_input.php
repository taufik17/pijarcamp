<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pijarcamp | Input Data</title>
</head>

<body>
	<h3>Form Input Data</h3>

	<table>
		<form action="<?= base_url('welcome/insertproduk') ?>" method="post">
			<tr>
				<td>Nama Produk</td>
				<td>:</td>
				<td><input type="text" name="nama_produk" autofocus required></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="ket" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" required></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jumlah" required></td>
			</tr>
			<tr>
				<td colspan="3">
					<center>
						<input type="submit" value="SIMPAN">
                    </center>
				</td>
			</tr>
		</form>
	</table>
</body>

</html>