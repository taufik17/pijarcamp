<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pijarcamp</title>
</head>
<body>
        <h1>CRUD Pijarcamp</h1>
        <h3>(Data Produk)</h3>
        <button onclick="document.location.href='<?= base_url('welcome/forminput') ?>'">Tambah Produk</button>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no = 0;
            foreach ($data_barang as $row) : 
            $no++ 
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row->nama_produk ?></td>
                <td><?= $row->keterangan ?></td>
                <td><?= $row->harga ?></td>
                <td><?= $row->jumlah ?></td>
                <td><a href="<?= base_url('welcome/formedit/'). $row->id_produk ?>">Edit</a> <a href="<?= base_url('welcome/delete/'). $row->id_produk ?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>