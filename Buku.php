<?php
require_once __DIR__ . "/../config/Database.php";

class Buku {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getAll() {
        $result = mysqli_query($this->conn, "SELECT * FROM buku");
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getById($id) {
        $result = mysqli_query($this->conn, "SELECT * FROM buku WHERE id=$id");
        return mysqli_fetch_assoc($result);
    }

    public function insert($data) {
        mysqli_query($this->conn, "INSERT INTO buku VALUES(
            null,
            '{$data['judul']}',
            '{$data['penulis']}',
            '{$data['tahun']}',
            '{$data['stok']}'
        )");
    }

    public function update($data) {
        mysqli_query($this->conn, "UPDATE buku SET
            judul='{$data['judul']}',
            penulis='{$data['penulis']}',
            tahun='{$data['tahun']}',
            stok='{$data['stok']}'
            WHERE id={$data['id']}
        ");
    }

    public function delete($id) {
        mysqli_query($this->conn, "DELETE FROM buku WHERE id=$id");
    }
}