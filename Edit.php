<h2>Edit Buku</h2>

<form method="POST" action="../controllers/BukuController.php?action=update">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    Judul: <input type="text" name="judul" value="<?= $data['judul']; ?>"><br>
    Penulis: <input type="text" name="penulis" value="<?= $data['penulis']; ?>"><br>
    Tahun: <input type="number" name="tahun" value="<?= $data['tahun']; ?>"><br>
    Stok: <input type="number" name="stok" value="<?= $data['stok']; ?>"><br>

    <button type="submit">Update</button>
</form>