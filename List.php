<h2>Data Buku</h2>

<a href="controllers/BukuController.php?action=tambah">+ Tambah Data</a>

<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php $no = 1; ?>
<?php foreach($data as $item): ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $item['judul']; ?></td>
    <td><?= $item['penulis']; ?></td>
    <td><?= $item['tahun']; ?></td>
    <td><?= $item['stok']; ?></td>
    <td>
        <a href="controllers/BukuController.php?action=edit&id=<?= $item['id']; ?>">Edit</a> |
        <a href="controllers/BukuController.php?action=delete&id=<?= $item['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>