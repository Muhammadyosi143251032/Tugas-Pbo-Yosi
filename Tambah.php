<h2>Tambah Buku</h2>

<form method="POST" action="../controllers/BukuController.php?action=store">
    Judul: <input type="text" name="judul"><br>
    Penulis: <input type="text" name="penulis"><br>
    Tahun: <input type="number" name="tahun"><br>
    Stok: <input type="number" name="stok"><br>

    <button type="submit">Simpan</button>
</form>